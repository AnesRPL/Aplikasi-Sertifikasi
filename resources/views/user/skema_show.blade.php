<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Skema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5" style="max-width: 600px;">
        <div class="card shadow border-0 p-4">
            <h3 class="fw-bold mb-4">Detail Skema Sertifikasi</h3>
            <div class="mb-3">
                <label class="text-muted small fw-semibold">Kode Skema</label>
                <p class="fs-5 fw-bold text-primary">{{ $skema->kode_skema }}</p>
            </div>
            <div class="mb-4">
                <label class="text-muted small fw-semibold">Nama Skema</label>
                <p class="fs-5">{{ $skema->nama_skema }}</p>
            </div>
            <a href="{{ route('skema.index') }}" class="btn btn-secondary">&larr; Kembali</a>
        </div>
    </div>
</body>
</html>