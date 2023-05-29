<?php

namespace App\Http\Controllers;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShoeController;
use App\Models\Command;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    //
    // public function index()
    // {
       
    // $cartItems = DB::table('carts')->get();
    // // or
    // // $cartItems = Cart::all();

    // return view('admin.command.index', compact('cartItems'));
    // }
    public function index()
    {
        $commands = Command::with('shoe')->get();

        return view('admin.command.index', compact('commands'));
    }

}
