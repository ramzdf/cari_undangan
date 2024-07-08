@extends('admin.layout.main')
@section('content')
    <div class="p-lg-3">
        <h3 class="mt-0 font-weight-bold">Detail Undangan</h3>
        <div class="wrap">
            <div class="row">
                <div class="col-md-5">
                    <img src="{{ $invitation->image_theme == null ? asset('images/theme.jpg') : asset('storage/themes/' . $invitation->image_theme) }}"
                        alt="gambar" class="img-fluid">
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <h2 class="mb-2">{{ $invitation->theme }}</h2>
                        <hr />
                        <h5>Deskripsi</h5>
                        <p style="text-align: justify;">{{ $invitation->description }}</p>
                    </div>
                    <hr />
                    <a href="/admin/invitation" class="btn btn-warning">Kembali</a>
                </div>
            </div>

        </div>
    @endsection
