@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-white py-3">
            <h4 class="mb-0 fw-bold">Detail Data Peserta</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 25%;">NIK</th>
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
                            {{ $peserta->skema->kode_skema }} - {{ $peserta->skema->nama_skema }} ({{ $peserta->skema->jenis }})
                        @else
                            <span class="text-danger">Skema tidak ditemukan / Belum dipilih</span>
                        @endif
                    </td>
                </tr>
            </table>
            
            <div class="mt-3">
                <a href="{{ route('peserta.index') }}" class="btn btn-secondary px-4">Kembali</a>
                <!-- Perbaikan di sini: langsung mengirim variabel $peserta -->
                <a href="{{ route('peserta.edit', $peserta) }}" class="btn btn-warning px-4">Edit Data</a>
            </div>
        </div>
    </div>
</div>
@endsection