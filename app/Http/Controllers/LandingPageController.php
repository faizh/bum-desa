<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingPageController extends Controller
{
    public function index() : View {
        return view('contents.index');
    }

    public function profile() : View {
        return view('contents.profile');
    }

    public function berita() : View {
        return view('contents.berita');
    }

    public function portofolio() : View {
        return view('contents.portofolio');
    }
}
