<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrator</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #90caf9; /* Warna biru soft senada dengan halaman welcome dan register */
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .register-container {
            width: 100%;
            max-width: 480px;
        }
        .card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }
    </style>
</head>
<body>

    <div class="register-container px-3">
        <!-- Card Utama Login -->
        <div class="card p-4 bg-white">
            <h3 class="text-center fw-bold mb-4 text-dark">Login Admin</h3>

            @if($errors->any())
                <div class="alert alert-danger py-2 small">{{ $errors->first() }}</div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-secondary fw-semibold small">Email</label>
                    <input type="email" name="email" class="form-control form-control-lg fs-6" required value="{{ old('email') }}" placeholder="">
                </div>
                
                <div class="mb-4">
                    <label class="form-label text-secondary fw-semibold small">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg fs-6" required placeholder="">
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold">Login</button>
            </form>

            <div class="text-center mt-3">
                <small class="text-muted">Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none fw-semibold">Daftar di sini</a></small>
            </div>
        </div>

        <!-- Tombol Kembali ke Beranda di Bawah Card -->
        <div class="mt-3">
            <a href="{{ url('/') }}" class="btn btn-warning w-100 py-2 fw-semibold text-dark shadow-sm" style="background-color: #ffc107; border: none;">
                &larr; Kembali ke Beranda
            </a>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>