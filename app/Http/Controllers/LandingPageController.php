<?php

namespace App\Http\Controllers;

use App\Models\MoneyLoan;
use App\Models\News;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;

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

    public function moneyLoan () : View {
        return view('contents.money-loan');
    }

    public function moneyLoanStore(Request $request) : RedirectResponse {
        $request->validate([
            'nik'           => ['required'],
            'name'          => ['required'],
            'phone_number'  => ['required'],
            'address'       => ['required'],
            'nominal'       => ['required'],
            'tenor'         => ['required'],
        ]);
        
        $loanAmount     = $request->post('nominal');
        $loanDuration   = $request->post('tenor');
        $monthyFee      = (new MoneyLoanController)->getMonthyFee($loanAmount, $loanDuration);

        $path   = 'public/images/money_loans';

        $file_ktp = $request->file('ktp');
        $filename = "ktp-" . str_replace(" ", "_", $request->post('nik')) . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file_ktp->extension();

        $path_ktp = $file_ktp->storeAs($path, $filename);
        
        if ( ! $path_ktp ) {
            echo "error upload";exit;
        }

        $file_ktp_holding = $request->file('holding_ktp');
        $filename = "holding-ktp-" . str_replace(" ", "_", $request->post('nik')) . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file_ktp_holding->extension();

        $path_ktp_holding = $file_ktp_holding->storeAs($path, $filename);
        
        if ( ! $path_ktp_holding ) {
            echo "error upload";exit;
        }

        $file_kk = $request->file('kk');
        $filename = "kk-" . str_replace(" ", "_", $request->post('nik')) . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file_kk->extension();

        $path_kk = $file_kk->storeAs($path, $filename);
        
        if ( ! $path_kk ) {
            echo "error upload";exit;
        }

        $loanData = array(
            'nik'               => $request->post('nik'),
            'name'              => $request->post('name'),
            'phone_number'      => $request->post('phone_number'),
            'address'           => $request->post('address'),
            'nominal'           => $request->post('nominal'),
            'tenor'             => $request->post('tenor'),
            'monthly_fee'       => $monthyFee,
            'ktp_path'          => $path_ktp,
            'holding_ktp_path'  => $path_ktp_holding,
            'kk_path'           => $path_kk,
            'created_by'        => NULL
        );

        $create = MoneyLoan::create($loanData);

        if ( !$create ) {
            echo "error create";exit;
        }
 
        return redirect()->route('money-loan');
    }
}
