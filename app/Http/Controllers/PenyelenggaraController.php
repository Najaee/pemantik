<?php

namespace App\Http\Controllers;

use App\Models\Penyelenggara;
use Illuminate\Http\Request;

class PenyelenggaraController extends Controller
{
    public function index()
    {
        $penyelenggaras = Penyelenggara::all();
        return view('penyelenggara.index', compact('penyelenggaras'));
    }

    public function create()
    {
        return view('penyelenggara.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'penanggungjawab' => 'required|string|max:255',
            'perangkat_daerah_penyelenggara' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kabupaten_kota' => 'required|string|max:255',
            'alamat_lengkap_penyelenggara' => 'required|string',
        ]);

        Penyelenggara::create($validated);
        return redirect()->route('penyelenggara.index')->with('success', 'Penyelenggara berhasil ditambahkan!');
    }

    public function edit(Penyelenggara $penyelenggara)
    {
        return view('penyelenggara.edit', compact('penyelenggara'));
    }

    public function update(Request $request, Penyelenggara $penyelenggara)
    {
        $validated = $request->validate([
            'penanggungjawab' => 'required|string|max:255',
            'perangkat_daerah_penyelenggara' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kabupaten_kota' => 'required|string|max:255',
            'alamat_lengkap_penyelenggara' => 'required|string',
        ]);

        $penyelenggara->update($validated);
        return redirect()->route('penyelenggara.index')->with('success', 'Penyelenggara berhasil diperbarui!');
    }

    public function destroy(Penyelenggara $penyelenggara)
    {
        $penyelenggara->delete();
        return redirect()->route('penyelenggara.index')->with('success', 'Penyelenggara berhasil dihapus!');
    }
}
