<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Skema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark px-4">
        <span class="navbar-brand fw-bold">Sertifikasi App</span>
        <a href="{{ route('dashboard.user') }}" class="btn btn-outline-light btn-sm">Kembali ke Dashboard</a>
    </nav>

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold">Daftar Skema Sertifikasi</h2>
            <form action="{{ route('skema.index') }}" method="GET" class="d-flex" style="width: 300px;">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari skema..." value="{{ $search ?? '' }}">
                <button type="submit" class="btn btn-primary btn-sm">Cari</button>
            </form>
        </div>

        <div class="card shadow border-0 p-0">
            <table class="table table-hover mb-0 align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="ps-3">No</th>
                        <th>Kode Skema</th>
                        <th>Nama Skema</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($skemas as $index => $skema)
                        <tr>
                            <td class="ps-3">{{ $skemas->firstItem() + $index }}</td>
                            <td><span class="badge bg-secondary">{{ $skema->kode_skema }}</span></td>
                            <td class="fw-semibold">{{ $skema->nama_skema }}</td>
                            <td class="text-center">
                                <a href="{{ route('skema.show', $skema->id) }}" class="btn btn-info btn-sm text-white">Lihat Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="4" class="text-center py-4 text-muted">Data tidak ditemukan.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-4">{{ $skemas->links() }}</div>
    </div>
</body>
</html>