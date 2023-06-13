<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class adminController extends Controller
{
    function login() : View {
        return view('login');
    }

    function dashboard() : View {
        return view('admin');
    }
}
