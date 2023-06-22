<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\GoodsLoan;
use App\Models\GoodsLoanDetails;
use DateTime;
use Illuminate\Http\Request;

class GoodsLoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loans = GoodsLoan::all();

        $page = "layanan-peminjaman";
        return view('admin.contents.goods-loan.layanan-peminjaman', ['page' => $page, 'loans' => $loans]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_barang = Barang::all();

        $page = "layanan-peminjaman";
        return view('admin.contents.goods-loan.layanan-peminjaman-create', [
            'page' => $page, 'l',
            'list_barang'   => $list_barang
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'           => ['required'],
            'name'          => ['required'],
            'phone_number'  => ['required'],
            'address'       => ['required'],
            'barang'        => ['required'],
            'start_date'    => ['required'],
            'end_date'      => ['required'],
        ]);
        
        $barang     = $request->post('barang');
        $start_date = $request->post('start_date');
        $end_date   = $request->post('end_date');

        $path   = 'public/images/goods_loans';

        $file_ktp = $request->file('ktp');
        $filename = "ktp-" . str_replace(" ", "_", $request->post('nik')) . '-' . md5(date('Y-m-d H:i:s')) . '.' .$file_ktp->extension();

        $path_ktp = $file_ktp->storeAs($path, $filename);
        
        if ( ! $path_ktp ) {
            echo "error upload";exit;
        }  
        
        $total_price = 0; // will be updated below
        $loanData = array(
            'nik'               => $request->post('nik'),
            'name'              => $request->post('name'),
            'phone_number'      => $request->post('phone_number'),
            'address'           => $request->post('address'),
            'start_date'        => $start_date,
            'end_date'          => $end_date,
            'total_price'       => $total_price,
            'ktp_path'          => $path_ktp,
        );

        $create = GoodsLoan::create($loanData);
        
        if ( !$create ) {
            echo "error create";exit;
        }

        $goods_loan_id = $create->id;
        
        if (! is_array($barang)) {
            $barang = array($barang);
        }

        $detail_barang = Barang::whereIn('id', $barang)->get();

        foreach ($detail_barang as $barang) {
            $loanDetail = array(
                'barang_id'     => $barang->id,
                'price'         => $barang->price,
                'goods_loan_id' => $goods_loan_id
            );

            $createDetail = GoodsLoanDetails::create($loanDetail);
            $total_price += $barang->price;
        }

        $date1      = new DateTime($start_date);
        $date2      = new DateTime($end_date);
        $interval   = $date1->diff($date2);
        $diff       = $interval->days + 1;

        $goodsLoan = GoodsLoan::find($goods_loan_id);
        $goodsLoan->total_price = $total_price * $diff;
        $goodsLoan->save();
 
        return redirect()->route('layanan_peminjaman');
    }

    /**
     * Display the specified resource.
     */
    public function show(GoodsLoan $goodsLoan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GoodsLoan $goodsLoan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GoodsLoan $goodsLoan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GoodsLoan $goodsLoan)
    {
        //
    }
}
