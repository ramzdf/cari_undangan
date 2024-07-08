@extends('admin.layout.main')
@section('content')
    <div class="p-lg-3">
        <h3 class="mt-0 mb-2 font-weight-bold text-center">Edit Undangan</h3>

        <hr />

        <div class="container-admin">
            <form action="/admin/invitation/{{ $invitation->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3 row d-flex justify-content-center">
                            <img src="{{ $invitation->image_theme == null ? asset('images/theme.jpg') : asset('storage/themes/' . $invitation->image_theme) }}"
                                alt="gambar" class="img-fluid col-sm-5">
                        </div>
                        <div class="mb-3 row d-flex justify-content-center">
                            <input class="form-control" type="text" placeholder="Masukkan Tema" name="theme"
                                value="{{ $invitation->theme }}">
                            @error('theme')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3 row d-flex justify-content-center">
                            <textarea class="form-control" aria-label="With textarea" placeholder="Deskripsi Undangan" rows="6"
                                name="description">{{ $invitation->description }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="image-preview mb-3 row d-flex justify-content-center">
                            <label for="image_theme_new" class="form-label">Gambar Undangan</label>
                            <input class="form-control" type="file" name="image_theme_new" id="imageImg"
                                onchange="imgpreview()">
                            <img class="img-preview img-fluid mb-3 col-sm-5 ">
                            @error('image_theme_new')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mt-2 mb-3 row d-flex justify-content-center gap-2">
                    <a href="/admin/invitation" class="btn btn-warning" style="width: 15%">Kembali</a>
                    <button class="btn btn-admin" type="submit" style="width: 15%">Ubah Data</button>
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
