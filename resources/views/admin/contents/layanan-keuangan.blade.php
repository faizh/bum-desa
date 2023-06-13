@extends('admin.layouts.layout')

@section('content')
<div class="main-content-inner">         
    <!-- Berita -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Peminjaman Uang</h4>
                        <a href="{{ url('admin-pkeuangan-add') }}" class="btn btn-primary">Add</a>
                    </div>
                    <div>
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">NIK</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat Lengkap</th>
                                <th scope="col">No telfon</th>
                                <th scope="col">Nominal Peminjaman</th>
                                <th scope="col">Jumlah Bulan</th>
                                <th scope="col">Pembayaran Perbulan</th>
                                <th scope="col">Foto KTP</th>
                                <th scope="col">Foto memegang KTP</th>
                                <th scope="col">Foto Kartu Keluarga</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><a href="{{ url('admin-pkeuangan-edit') }}" type="button" class="btn btn-success">Update</a></td>
                                <td><button type="button" class="btn btn-danger">Delete</button></td>
                              </tr>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><button type="button" class="btn btn-success">Update</button></td>
                                <td><button type="button" class="btn btn-danger">Delete</button></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- overview area end -->
    <!-- row area start -->
</div>
@stop