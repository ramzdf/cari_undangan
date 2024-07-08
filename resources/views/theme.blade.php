@extends('layout.main_page')
@section('content')
    <div class="container-fluid">
        <div class="container">

            {{-- Theme --}}
            <div class="my-5 py-5" id="themes">
                <div class="row mb-4">
                    <div class="col-md-12 mb-3 text-center">
                        <h2><strong>Tema Undangan : {{ $invitation->theme }}</strong></h2>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ $invitation->image_theme == null ? asset('images/theme.jpg') : asset('storage/themes/' . $invitation->image_theme) }}"
                                    alt="foto {{ $invitation->theme }}" class="img-fluid">
                            </div>
                            <div class="description col-md-7 d-flex align-content-center">
                                <h3>{{ $invitation->theme }}</h3>
                                <p class="line-clamp-10">{{ $invitation->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Theme --}}

        </div>
    </div>
@endsection
