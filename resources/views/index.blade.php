@extends('layout.main')
@section('content')
    <div class="container-fluid">
        <div class="container">

            {{-- Slider --}}
            <div class="row my-5 py-5">
                <div class="col-md-6 d-flex align-items-center">
                    <div>
                        <h1><strong>Website Undangan<br>
                                Pernikahan Online</strong></h1>
                        <p>Undang orang-orang terdekat dalam
                            momen kebahagiaan pernikahan Anda
                            dengan cara yang unik dan menarik.</p>
                        <a href="/undangan" class="btn btn-admin">Daftar Sekarang</a>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end">
                    <img src="{{ asset('images/desktop-mobile.png') }}" alt="undangan" width="100%">
                </div>
            </div>
            {{-- End Slider --}}

            {{-- Fitur --}}
            <div class="my-5 py-5" id="fitur">
                <div class="row mb-4">
                    <div class="col-md-12 text-center">
                        <h2><strong>Fitur Undangan Digital Terbaik</strong></h2>
                        <p style="width: 50%; margin: auto;">Berbagai macam fitur terbaik undangan online yang Anda butuhkan
                            ada disini dan kami akan selalu berinovasi menambahkan fitur-fitur lainnya</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-globe fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Domain Ekslusif</h5>
                                <p class="card-text" style="font-size: 0.8rem">Menggunakan mekanisme subdomain dan tersedia
                                    paket custom domain (white label)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-users fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Custom Nama Tamu</h5>
                                <p class="card-text" style="font-size: 0.8rem">Satu tamu, satu undangan. Selayaknya undangan
                                    pernikahan fisik</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-edit fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Full Custom Teks</h5>
                                <p class="card-text" style="font-size: 0.8rem">Seluruh teks pada undangan dapat Anda ubah
                                    sesuai keinginan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-dashboard fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Interaktif Dashboard</h5>
                                <p class="card-text" style="font-size: 0.8rem">Menggunakan dashboard dengan tampilan dan
                                    cara penggunaan yang mudah dimengerti</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fa fa-video fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Konten Lengkap</h5>
                                <p class="card-text" style="font-size: 0.8rem">Tersedia berbagai jenis konten baik teks,
                                    gambar, link, peta, musik hingga video</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fa fa-laptop fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Tema Instan</h5>
                                <p class="card-text" style="font-size: 0.8rem">Tersedia berbagai macam tema siap pakai yang
                                    dapat diganti kapan saja tanpa batas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-users fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Manajemen Tamu</h5>
                                <p class="card-text" style="font-size: 0.8rem">Fitur pengaturan tamu baik personal / grup
                                    sesuai preferensi (undangan / informasi)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-comments fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Reservasi & Buku Tamu</h5>
                                <p class="card-text" style="font-size: 0.8rem">Fitur penerima ucapan dari tamu dan
                                    konfirmasi kehadiran dengan manajemen data yang baik</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-money-bill-wave fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Pembayaran Mudah</h5>
                                <p class="card-text" style="font-size: 0.8rem">Pembayaran dapat dilakukan kapan saja,
                                    mudah, otomatis dengan metode pembayaran yang lengkap</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-book fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Story & Quotes</h5>
                                <p class="card-text" style="font-size: 0.8rem">Ceritakan perjalanan / deskripsi undangan
                                    Anda & tambahkan quotes kepada tamu undangan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-award fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Hadiah</h5>
                                <p class="card-text" style="font-size: 0.8rem">Tersedia fitur kirim hadiah secara online
                                    ke rekening kamu atau alamat melalui undanganmu </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <div class="card" style="border-radius: 20px; height:300px;">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="mb-3 "
                                    style="background-color: #BBDCFF; border-radius: 50%; padding: 20px; width: 90px; height: 90px; display: flex; justify-content: center; align-items: center;">
                                    <i class="fas fa-clock fa-3x" style="color: #6753F1; font-size: 2rem;"></i>
                                </div>
                                <h5 class="card-title" style="font-size: 1rem">Countdown Timer</h5>
                                <p class="card-text" style="font-size: 0.8rem">Tersedia fitur countdown timer yang dapat
                                    berfungsi sebagai pengingat waktu acara</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Fitur --}}

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
                            @foreach ($invitations as $theme)
                                <div class="col-md-3 mb-3" style="border-radius: 20px; overflow: hidden;">
                                    <a href="/semua-tema/{{ $theme->id }}">
                                        <img src="{{ $theme->image_theme == null ? asset('images/theme.jpg') : asset('storage/themes/' . $theme->image_theme) }}"
                                            style="width: 100%; border-radius: 10px;" alt="theme">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="/semua-tema" class="btn btn-admin">Lihat Semua Tema</a>
                    </div>
                </div>
            </div>
            {{-- End Theme --}}

            {{-- Pricing --}}
            <div class="my-5 py-5" id="pricing">
                <div class="row mb-4">
                    <div class="col-md-12 text-center">
                        <h2><strong>Paket Harga Undangan Digital</strong></h2>
                        <p style="width: 50%; margin: auto;">Pilih paket harga yang sesuai dengan kebutuhan Anda, kami
                            menyediakan berbagai macam paket harga yang bisa Anda pilih.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 20px; background-color: #BBDCFF;">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('images/bronze.png') }}" alt="paket-bronze" width="25%">
                                </div>
                                <h3 class="card-title text-center"><strong>Bronze</strong></h3>
                                <p class="card-text text-center">Rp. 30.000</p>
                                <hr style="border: 1px solid #ffffff;">
                                <ul>
                                    <li>Pilihan Template Design</li>
                                    <li>Hitung Mundur</li>
                                    <li>Qoutes</li>
                                    <li>Background Musik</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 20px; background-color: #BBDCFF;">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('images/silver.png') }}" alt="paket-silver" width="25%">
                                </div>
                                <h3 class="card-title text-center"><strong>Silver</strong></h3>
                                <p class="card-text text-center">Rp. 80.000</p>
                                <hr style="border: 1px solid #ffffff;">
                                <ul>
                                    <li>Pilihan Template Design</li>
                                    <li>Custom Design</li>
                                    <li>Amplop Digital</li>
                                    <li>Hitung Mundur</li>
                                    <li>Qoutes</li>
                                    <li>Background Musik</li>
                                    <li>Galeri Foto 8</li>
                                    <li>Love Story</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="border-radius: 20px; background-color: #BBDCFF;">
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="{{ asset('images/gold.png') }}" alt="paket-gold" width="25%">
                                </div>
                                <h3 class="card-title text-center"><strong>Gold</strong></h3>
                                <p class="card-text text-center">Rp. 180.000</p>
                                <hr style="border: 1px solid #ffffff;">
                                <ul>
                                    <li>Pilihan Template Design</li>
                                    <li>Custom Design</li>
                                    <li>Amplop Digital</li>
                                    <li>Hitung Mundur</li>
                                    <li>Qoutes</li>
                                    <li>Background Musik</li>
                                    <li>Galeri Foto 8 + video</li>
                                    <li>Love Story</li>
                                    <li>Google Maps</li>
                                    <li>Share Ke Whatsapp</li>
                                    <li>Ucapan & Doa</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Pricing --}}

            {{-- Recommendation --}}
            <div class="my-5 py-5" id="recommendation">
                <div class="row mb-4">
                    <div class="col-md-12 text-center">
                        <h2><strong>Rekomendasi Undangan Digital</strong></h2>
                        <p style="width: 60%; margin: auto;">Berikut adalah beberapa undangan digital yang kami
                            rekomendasikan
                            untuk Anda.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form action="/search" method="post">
                            @csrf
                            <div class="mb-3 row d-flex justify-content-center">
                                <textarea class="form-control" name="search" aria-label="With textarea"
                                    placeholder="Isi text deskripsi undangan yang diinginkan" rows="6"></textarea>
                            </div>
                            <div class="mb-3 row d-flex justify-content-center">
                                <button class="btn btn-admin" type="submit" style="width: 15%">Rekomendasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
