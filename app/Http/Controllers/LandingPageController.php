<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Portfolio;
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
        $portofolios = Portfolio::all();

        return view('contents.portofolio', [
            'portofolios'    => $portofolios
        ]);
    }

    public function portofolioDetails (int $id) : View {
        $portofolio = Portfolio::find($id);

        return view('contents.portofolio-details ', [
            'portofolio'    => $portofolio
        ]);
    }
}
