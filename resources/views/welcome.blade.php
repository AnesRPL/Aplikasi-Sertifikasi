<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - Aplikasi Sertifikasi</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero-section {
            background-color: #90caf9;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            color: white;
        }
        .navbar {
            padding: 20px 40px;
        }
        .hero-content {
            text-align: center;
            max-width: 850px;
            padding: 0 20px;
        }
        .hero-title {
            font-size: 3.2rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: #ffffff;
        }
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: #f8fafc;
            line-height: 1.6;
        }
        .btn-custom {
            padding: 10px 25px;
            font-weight: 600;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }
    </style>
</head>
<body>

    <div class="hero-section">
        <!-- Navbar dengan Tombol Masuk & Daftar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <div class="ms-auto d-flex gap-2">
                    <a href="{{ route('login') }}" class="btn btn-outline-light btn-custom">Masuk</a>
                    <a href="{{ route('register') }}" class="btn btn-warning text-dark btn-custom shadow-sm">Daftar</a>
                </div>
            </div>
        </nav>

        <!-- Konten Utama Full Screen -->
        <div class="container d-flex flex-column align-items-center justify-content-center hero-content mx-auto my-auto">
            <h1 class="hero-title">Selamat Datang di Aplikasi Pengelolaan Data Peserta Sertifikasi</h1>
            <p class="hero-subtitle">Platform digital terpadu untuk mengelola data skema dan peserta uji kompetensi keahlian secara efisien, transparan, dan profesional.</p>
            <div class="d-flex gap-3">
                <a href="{{ route('login') }}" class="btn btn-light text-dark btn-lg btn-custom px-4 shadow-sm">Mulai Sekarang</a>
            </div>
        </div>

        <!-- Footer Kecil -->
        <footer class="text-center pb-4 text-white-50">
            <small>&copy; 2026 Uji Kompetensi Keahlian - Rekayasa Perangkat Lunak</small>
        </footer>
    </div>

</body>
</html>