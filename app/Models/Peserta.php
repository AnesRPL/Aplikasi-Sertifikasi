<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'pesertas';

    protected $fillable = [
        'user_id', // Tambahkan ini agar bisa menyimpan relasi ID user
        'nik',
        'nama_peserta',
        'jenis_kelamin',
        'nomor_telepon',
        'skema_id',
    ];

    public function skema()
    {
        return $this->belongsTo(Skema::class, 'skema_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}