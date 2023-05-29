<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function men(){
        return view('admin.adminMen');
    }
    //
    public function women(){
        return view('admin.adminWomen');
    }
}
