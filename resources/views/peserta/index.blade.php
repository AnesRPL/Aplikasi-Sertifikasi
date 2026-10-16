@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Header & Tombol Tambah Peserta -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold text-dark">Data Peserta Sertifikasi</h3>
        <a href="{{ route('peserta.create') }}" class="btn btn-primary btn-sm px-3 shadow-sm">
            + Tambah Peserta
        </a>
    </div>

    <!-- Kotak Pencarian -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-body">
            <form action="{{ route('peserta.index') }}" method="GET" class="row g-2">
                <div class="col-md-10">
                    <input type="text" name="search" class="form-control" placeholder="Cari berdasarkan NIK atau Nama Peserta..." value="{{ $search ?? '' }}">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-dark w-100">Cari</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Tabel Data Peserta -->
    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light text-secondary">
                        <tr>
                            <th class="py-3 px-3 text-center" style="width: 5%;">No</th>
                            <th class="py-3">NIK</th>
                            <th class="py-3">Nama Peserta</th>
                            <th class="py-3">Jenis Kelamin</th>
                            <th class="py-3">Telepon</th>
                            <th class="py-3">Skema Sertifikasi</th>
                            <th class="py-3 text-center" style="width: 20%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($pesertas as $index => $peserta)
                            <tr>
                                <td class="text-center">{{ $pesertas->firstItem() + $index }}</td>
                                <td>{{ $peserta->nik }}</td>
                                <td class="fw-semibold">{{ $peserta->nama_peserta }}</td>
                                <td>{{ $peserta->jenis_kelamin }}</td>
                                <td>{{ $peserta->nomor_telepon ?? $peserta->no_hp ?? '-' }}</td>
                                <td>{{ $peserta->skema->nama_skema ?? '-' }}</td>
                                <td class="text-center">
                                    <div class="d-inline-flex gap-1">
                                        <a href="{{ route('peserta.show', $peserta->id) }}" class="btn btn-info btn-sm text-white px-2 py-1">Detail</a>
                                        <a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-warning btn-sm text-dark px-2 py-1">Edit</a>
                                        <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm px-2 py-1">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">Tidak ada data peserta ditemukan.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Paginasi -->
    <div class="mt-3">
        {{ $pesertas->withQueryString()->links() }}
    </div>
</div>
@endsection