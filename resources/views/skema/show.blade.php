@extends('layouts.app')

@section('content')
<h2>Detail Data Skema Sertifikasi</h2>
<div class="card shadow-sm"><div class="card-body">
    <table class="table">
        <tr>
            <th width="200">Kode Skema</th>
            <td>{{ $skema->kode_skema }}</td>
        </tr>
        <tr>
            <th>Nama Skema</th>
            <td>{{ $skema->nama_skema }}</td>
        </tr>
        <tr>
            <th>Jenis Skema</th>
            <td>{{ $skema->jenis }}</td>
        </tr>
        <tr>
            <th>Deskripsi</th>
            <td>{{ $skema->deskripsi ?? 'Skema sertifikasi kompetensi untuk menguji keahlian dan standar profesi peserta.' }}</td>
        </tr>
    </table>
    <a href="{{ route('skema.index') }}" class="btn btn-secondary">Kembali</a>
</div></div>
@endsection