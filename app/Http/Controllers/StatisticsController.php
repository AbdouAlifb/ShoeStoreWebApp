<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Command;

use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function index()
    {
        // Retrieve commands data
        $commandsData = $this->getCommandsData();

        // Retrieve users data
        $usersData = $this->getUsersData();

        return view('statistics', compact('commandsData', 'usersData'));
    }

    private function getCommandsData()
{
    $commandsData = Command::query()
        ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
        ->groupBy('date')
        ->orderBy('date')
        ->pluck('count', 'date')
        ->toArray();

    // Fill in missing dates with zero counts
    $startDate = Carbon::now()->subDays(30);
    $endDate = Carbon::now();
    $dates = $this->generateDateRange($startDate, $endDate);

    foreach ($dates as $date) {
        $formattedDate = $date->format('Y-m-d');

        if (!isset($commandsData[$formattedDate])) {
            $commandsData[$formattedDate] = 0;
        }
    }

    ksort($commandsData);

    return $commandsData;
}


    private function getUsersData()
    {
        $usersData = User::query()
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->pluck('count', 'date')
            ->toArray();

        // Fill in missing dates with zero counts
        $startDate = Carbon::now()->subDays(30);
        $endDate = Carbon::now();
        $dates = $this->generateDateRange($startDate, $endDate);

        foreach ($dates as $date) {
            $formattedDate = $date->format('Y-m-d');

            if (!isset($usersData[$formattedDate])) {
                $usersData[$formattedDate] = 0;
            }
        }

        ksort($usersData);

        return $usersData;
    }

    private function generateDateRange($startDate, $endDate)
    {
        $dates = [];

        while ($startDate <= $endDate) {
            $dates[] = $startDate->copy();
            $startDate->addDay();
        }

        return $dates;
    }
}

