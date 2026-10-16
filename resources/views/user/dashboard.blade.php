@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0 p-4">
                <h3 class="fw-bold mb-3">Dashboard Peserta</h3>
                <p class="text-muted">Selamat datang, <strong>{{ auth()->user()->name }}</strong>!</p>
                <hr>

                <div class="mb-3">
                    <p class="mb-2"><strong>Email Akun:</strong> {{ auth()->user()->email }}</p>
                    <p class="mb-2"><strong>Role:</strong> <span class="badge bg-success">Peserta / User</span></p>
                </div>

                <hr>

                <h5 class="fw-bold mb-3 text-dark">Data Sertifikasi Anda</h5>

                @if($peserta)
                    <table class="table table-bordered align-middle">
                        <tr>
                            <th style="width: 35%;">NIK</th>
                            <td>{{ $peserta->nik }}</td>
                        </tr>
                        <tr>
                            <th>Nama Peserta</th>
                            <td class="fw-semibold">{{ $peserta->nama_peserta }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>{{ $peserta->jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <th>Nomor Telepon</th>
                            <td>{{ $peserta->nomor_telepon ?? $peserta->no_hp ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Skema Sertifikasi</th>
                            <td>
                                @if($peserta->skema)
                                    <span class="fw-bold text-primary">{{ $peserta->skema->nama_skema }}</span> 
                                    <br><small class="text-muted">({{ $peserta->skema->kode_skema }} - {{ $peserta->skema->jenis }})</small>
                                @else
                                    <span class="text-danger">Belum ada skema yang dipilihkan oleh admin.</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                @else
                    <div class="alert alert-warning mb-0">
                        Data peserta untuk akun ini belum diinput oleh Admin. Silakan pastikan nama peserta di menu Admin sesuai dengan nama akun Anda (<strong>{{ auth()->user()->name }}</strong>).
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection