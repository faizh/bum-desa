@extends('admin.layouts.layout')

@section('content')
<!-- page title area end -->
<div class="main-content-inner">
                
    <!-- Berita -->
    <div class="row mt-5 mb-5">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-0">Buat Berita</h4>
                    </div>
                    <div>
                        <form action=" {{ route('berita-update', $news->id) }}" method="POST" enctype="multipart/form-data">
                            <br>
                            <div class="mb-3">
                                <label for="formjudul" class="form-label">Judul berita</label>
                                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Judul Berita" value="{{ $news->title }}">
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Isi Berita</label>
                                <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3">{{ $news->content }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Gambar</label> <br />
                                <img src="{{ $news->image_upload_path }} " width="150px">
                                <input class="form-control" type="file" id="formFile" name="image_news" accept="image/*">
                            </div>

                            <input type="submit" class="btn btn-warning float-right mt-3" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- overview area end -->
    <!-- row area start -->
</div>
@stop