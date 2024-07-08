<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/4555ee8635.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <link rel="shortcut icon" href="{{ asset('images/logo-icon.png') }}">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Invite Studio</title>
</head>

<body class="p-2 px-4"
    style="background-image: url('{{ asset('images/bg-login.png') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
    <div class="container">
        <div class="d-flex flex-column align-items-start justify-content-center" style="height: 100vh;">
            @if (session()->has('message'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <img src="{{ asset('images/logo.png') }}" alt="undangan" width="25%" class="mb-4">
            <div class="row justify-content-start w-100">
                <div class="col-12 col-md-6">
                    <form action="/login" method="post">
                        @csrf
                        <h2 class="my-3 text-left"><b>LOGIN</b></h2>
                        <div class="mb-3">
                            <label for="email" class="form-label" style="font-weight: 100;">Email</label>
                            <input type="text" id="inputEmail"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                placeholder="Masukkan Email...">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label" style="font-weight: 100;">Password</label>
                            <input type="password" id="inputPassword"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Masukkan Password...">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-submit mt-4">Masuk</button>
                            <a href="/" class="text-center lupapw">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
