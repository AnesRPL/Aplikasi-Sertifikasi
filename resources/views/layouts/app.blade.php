<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikasi App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">Sertifikasi App</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    @auth
                        <!-- 1. Dashboard -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ (auth()->user()->role === 'admin' || auth()->user()->email === 'admin@sertifikasi.com') ? route('dashboard.admin') : route('dashboard.user') }}">
                                Dashboard
                            </a>
                        </li>

                        <!-- 2. Data Skema -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('skema.index') }}">Data Skema</a>
                        </li>

                        <!-- 3. Data Peserta (Muncul jika Admin atau email admin) -->
                        @if(auth()->user()->role === 'admin' || auth()->user()->email === 'admin@sertifikasi.com')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('peserta.index') }}">Data Peserta</a>
                            </li>
                        @endif

                        <!-- 4. Logout -->
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger ms-3">Logout</button>
                            </form>
                        </li>
                    @endauth

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('skema.index') }}">Data Skema</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm px-3">Masuk</a>
                        </li>
                        <li class="nav-item ms-2">
                            <a href="{{ route('register') }}" class="btn btn-primary btn-sm px-3">Daftar</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>