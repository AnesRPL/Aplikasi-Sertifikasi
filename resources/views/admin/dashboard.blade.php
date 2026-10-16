@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="mb-4">
        <h2 class="fw-bold text-dark">Dashboard Administrator</h2>
        <p class="text-muted">Selamat datang di Aplikasi Pengelolaan Data Peserta Sertifikasi.</p>
    </div>

    <div class="row g-4">
        <!-- Card Total Skema -->
        <div class="col-md-6">
            <div class="card text-white bg-primary shadow-sm border-0 rounded-3 p-3">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Total Skema Sertifikasi</h5>
                    <h2 class="display-4 fw-bold my-3">{{ $totalSkema }}</h2>
                    <a href="{{ route('skema.index') }}" class="text-white text-decoration-none fw-semibold">
                        Kelola Skema &rarr;
                    </a>
                </div>
            </div>
        </div>

        <!-- Card Total Peserta -->
        <div class="col-md-6">
            <div class="card text-white bg-success shadow-sm border-0 rounded-3 p-3">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Total Peserta Terdaftar</h5>
                    <h2 class="display-4 fw-bold my-3">{{ $totalPeserta }}</h2>
                    <a href="{{ route('peserta.index') }}" class="text-white text-decoration-none fw-semibold">
                        Kelola Peserta &rarr;
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection