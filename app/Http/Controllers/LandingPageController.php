<?php

namespace App\Http\Controllers;

use App\Models\News;
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
        $berita = News::getAllNews();
        return view('contents.berita', [
            'list_berita' => $berita
        ]);
    }

    public function beritaDetail(int $beritaId) : View {
        $berita         = News::getNewsDetails($beritaId);
        $latest_news    = News::getLatestNews();

        return view('contents.berita-details', [
            'berita'        => $berita,
            'latest_news'   => $latest_news
        ]);
    }

    public function portofolio() : View {
        return view('contents.portofolio');
    }
}
