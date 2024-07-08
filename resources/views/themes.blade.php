@extends('layout.main_page')
@section('content')
    <div class="container-fluid">
        <div class="container">

            {{-- Theme --}}
            <div class="my-5 py-5" id="themes">
                <div class="row mb-4">
                    <div class="col-md-12 mb-3 text-center">
                        <h2><strong>Pilihan Tema Undangan Eksklusif</strong></h2>
                        <p style="width: 60%; margin: auto;">Pilih tema sesukamu, ganti tema sesukamu, tanpa edit, tanpa
                            antri, Langsung Jadi!</p>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            @if ($invitations->count() == 0)
                                <div class="col-md-12 text-center">
                                    <h3>Belum ada tema undangan</h3>
                                </div>
                            @else
                                @foreach ($invitations as $theme)
                                    <div class="col-md-3 mb-3" style="border-radius: 20px; overflow: hidden;">
                                        <a href="/semua-tema/{{ $theme->id }}">
                                            <img src="{{ $theme->image_theme == null ? asset('images/theme.jpg') : asset('storage/themes/' . $theme->image_theme) }}"
                                                style="width: 100%; border-radius: 10px;" alt="theme">
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        {{-- pagination --}}
                        {{ $invitations->links() }}
                    </div>
                </div>
            </div>
            {{-- End Theme --}}

        </div>
    </div>
@endsection
