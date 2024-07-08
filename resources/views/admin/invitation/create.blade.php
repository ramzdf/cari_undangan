@extends('admin.layout.main')
@section('content')
    <div class="p-lg-3">
        <h3 class="mt-0 mb-2 font-weight-bold text-center">Tambah Undangan</h3>

        <hr />

        <div class="container-admin">
            <form action="/admin/invitation" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3 row d-flex justify-content-center">
                            <input class="form-control" type="text" placeholder="Masukkan Tema" name="theme"
                                value="{{ old('theme') }}">
                            @error('theme')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 row d-flex justify-content-center">
                            <textarea class="form-control" aria-label="With textarea" placeholder="Deskripsi Undangan" rows="6"
                                name="description">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="image-preview mb-3 row d-flex justify-content-center">
                            <label for="image_theme" class="form-label">Gambar Undangan</label>
                            <input class="form-control" type="file" name="image_theme" id="imageImg"
                                onchange="imgpreview()">
                            <img class="img-preview img-fluid mb-3 col-sm-5 ">
                            @error('image_theme')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2 mb-3 row d-flex justify-content-center gap-2">
                    <a href="/admin/invitation" class="btn btn-warning" style="width: 15%">Kembali</a>
                    <button class="btn btn-admin" type="submit" style="width: 15%">Simpan Data</button>
                </div>
            </form>

        </div>
        <script>
            function imgpreview() {
                const image = document.querySelector('#imageImg');
                const imgPreview = document.querySelector('.img-preview');

                imgPreview.style.display = 'block';

                const reader = new FileReader();
                reader.readAsDataURL(image.files[0]);

                reader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script>
    @endsection
