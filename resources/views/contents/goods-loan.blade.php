@extends('layouts.layout')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Peminjaman Barang</h2>
          <ol>
            <li><a href="index.html">Layanan</a></li>
            <li>Peminjaman Barang</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Form Section ======= -->
    <section id="pbarang" class="portfolio" data-aos="fade-up">

        <div class="container">
            <div class="section-header">
                <h2>Peminjaman Barang</h2>
            </div>
            <form id="form-isi" action="{{ route('goods-loan.post')}}" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputnik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputnik" required name="nik">
                    </div>
                  </div>
                <div class="row mb-3">
                  <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="name" class="form-control" id="inputnama" required name="name">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputalamat" class="col-sm-2 col-form-label">Alamat Lengkap</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputtelp" class="col-sm-2 col-form-label">No Telpon</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="phone_number">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputpilih" class="col-sm-2 col-form-label">Pilih barang</label>
                    <div class="col-sm-10">
                      <div class="row">
                        <div class ="col-sm-11">
                            <select class="form-control" name="barang" required>
                                <option selected value="">Barang yang mau dipinjam</option>
                                @foreach ($list_barang as $barang)
                                    <option value="{{ $barang->id }}"> {{ $barang->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class ="col-sm-1">
                          <button type="button" class="btn btn-primary" onclick="addSelect()">+</button>
                        </div>
                        <br>
                        <div id="dynamic-fields"></div>
                      </div>
                    </div>
                </div>
                <div class="row mb-3">
                  <div class="row mb-3">
                    <label for="inputjml" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control" id="inputjml" required name="start_date">
                    </div>
                    <label for="inputjml" class="col-sm-2 col-form-label">Sampai tanggal ke </label>
                    <div class="col-sm-4">
                      <input type="date" class="form-control" id="inputjml" required name="end_date">
                    </div>
                  </div>
                <div class="row mb-3">
                    <label for="inputktp" class="col-sm-2 col-form-label">Foto KTP</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3">
                            <input class="form-control" type="file" id="formFile" name="ktp" required accept="image/*">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                          </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <h4 class="header-title mb-0"></h4>
                  <input type="submit" class="btn btn-primary" value="Create">
              </div>
              </form>
    
        </div>

  </main><!-- End #main -->
@stop