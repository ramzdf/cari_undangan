<nav class="navbar bg-light" data-bs-theme="light">
    <div class="container" style="padding:0px !important;">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" style=" margin: 0;" alt="logo bantu rumah" height="75">
        </a>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#fitur">Fitur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#themes">Tema</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#pricing">Harga</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#recommendation">Rekomendasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact">Kontak</a>
            </li>
            <li class="nav-item">
                @auth
                    <a class="btn btn-submit" href="/admin">Dashboard</a>
                @endauth
                @guest
                    <a class="btn btn-submit" href="/login">Login</a>
                @endguest
            </li>

        </ul>
    </div>

</nav>
