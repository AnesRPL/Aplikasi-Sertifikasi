<?php

namespace App\Http\Controllers;

use App\Models\Skema;
use Illuminate\Http\Request;

class SkemaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $skemas = Skema::when($search, function ($query, $search) {
            return $query->where('kode_skema', 'like', "%{$search}%")
                         ->orWhere('nama_skema', 'like', "%{$search}%");
        })->paginate(10)->withQueryString();

        // Cek jika yang akses adalah user biasa, arahkan ke view khusus read-only
        if (auth()->user()->role !== 'admin' && auth()->user()->email !== 'admin@sertifikasi.com') {
            return view('user.skema_index', compact('skemas', 'search'));
        }

        return view('skema.index', compact('skemas', 'search'));
    }

    public function show($id)
    {
        $skema = Skema::findOrFail($id);
        
        if (auth()->user()->role !== 'admin' && auth()->user()->email !== 'admin@sertifikasi.com') {
            return view('user.skema_show', compact('skema'));
        }

        return view('skema.show', compact('skema'));
    }

    // Method pendukung CRUD untuk Admin (Opsional namun menjaga kestabilan route resource)
    public function create()
    {
        return view('skema.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_skema' => 'required|unique:skemas',
            'nama_skema' => 'required',
        ]);

        Skema::create($request->all());

        return redirect()->route('skema.index')->with('success', 'Skema berhasil ditambahkan.');
    }

    public function edit(Skema $skema)
    {
        return view('skema.edit', compact('skema'));
    }

    public function update(Request $request, Skema $skema)
    {
        $request->validate([
            'kode_skema' => 'required|unique:skemas,kode_skema,' . $skema->id,
            'nama_skema' => 'required',
        ]);

        $skema->update($request->all());

        return redirect()->route('skema.index')->with('success', 'Skema berhasil diperbarui.');
    }

    public function destroy(Skema $skema)
    {
        $skema->delete();

        return redirect()->route('skema.index')->with('success', 'Skema berhasil dihapus.');
    }
}