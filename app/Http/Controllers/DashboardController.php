<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skema;
use App\Models\Peserta;

class DashboardController extends Controller
{
    /**
     * Tampilan Dashboard untuk Admin
     */
    public function adminIndex()
    {
        $totalSkema = Skema::count();
        $totalPeserta = Peserta::count();

        return view('admin.dashboard', compact('totalSkema', 'totalPeserta'));
    }

    /**
     * Tampilan Dashboard untuk User / Peserta
     */
    public function userIndex()
    {
        $user = auth()->user();

        // Mencari data peserta berdasarkan kecocokan nama atau NIK/email yang diinput admin
        $peserta = Peserta::with('skema')
                    ->where('nama_peserta', 'LIKE', '%' . $user->name . '%')
                    ->orWhere('nik', $user->email)
                    ->first();

        return view('user.dashboard', compact('peserta'));
    }
}