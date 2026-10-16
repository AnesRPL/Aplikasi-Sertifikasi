@extends('layouts.app')

@section('content')
<div class="container py-4">
    <!-- Judul Halaman -->
    <div class="mb-4">
        <h2 class="fw-bold text-dark">Dashboard Administrator</h2>
        <p class="text-muted">Selamat datang di Aplikasi Pengelolaan Data Peserta Sertifikasi.</p>
    </div>

    <!-- Statistik Card (Total Skema & Total Peserta) -->
    <div class="row g-4">
        <!-- Card Total Skema -->
        <div class="col-md-6">
            <div class="card bg-primary text-white border-0 shadow-sm rounded-3">
                <div class="card-body p-4">
                    <h5 class="card-title fw-normal fs-6">Total Skema Sertifikasi</h5>
                    <h1 class="display-4 fw-bold my-2">{{ $jumlahSkema ?? 0 }}</h1>
                    <a href="{{ route('skema.index') }}" class="text-white text-decoration-none fw-semibold small">
                        Kelola Skema &rarr;
                    </a>
                </div>
            </div>
        </div>

        <!-- Card Total Peserta -->
        <div class="col-md-6">
            <div class="card bg-success text-white border-0 shadow-sm rounded-3">
                <div class="card-body p-4">
                    <h5 class="card-title fw-normal fs-6">Total Peserta Terdaftar</h5>
                    <h1 class="display-4 fw-bold my-2">{{ $jumlahPeserta ?? 0 }}</h1>
                    <a href="{{ route('peserta.index') }}" class="text-white text-decoration-none fw-semibold small">
                        Kelola Peserta &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
