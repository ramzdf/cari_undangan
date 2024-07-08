@extends('layout.main_page')
@section('content')
    <div class="container-fluid">
        <div class="container">
            <h2>Rekomendasi Tema Undangan Berdasarkan <strong>{{ $search ?? '' }}</strong></h2>
            <div class="list-recom">
                @if (count($results) === 0)
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Maaf, tidak ada tema undangan yang ditemukan. Silahkan coba kata kunci lain</h3>
                            <a href="/#recommendation" class="btn btn-warning">Cari Tema Lain</a>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h3>Hasil pencarian: {{ $search }}</h3>
                        </div>
                    </div>
                    @foreach ($results as $invitation)
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <img src="{{ $invitation['document']->image_theme == null ? asset('images/theme.jpg') : asset('storage/themes/' . $invitation['document']->image_theme) }}"
                                    alt="foto {{ $invitation['document']->theme }}">
                            </div>
                            <div class="description col-md-7 d-flex align-content-center">
                                <div class="row">
                                    <h3>{{ $invitation['document']->theme }}</h3>
                                    <p class="line-clamp-10">{{ $invitation['document']->description }}</p>
                                    <p class="line-clamp-5">Nilai Similaritas:
                                        {{ number_format($invitation['similarity'], 3) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>
@endsection
