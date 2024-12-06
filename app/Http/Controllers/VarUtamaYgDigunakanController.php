<?php

namespace App\Http\Controllers;

use App\Models\VarUtamaYgDigunakan;
use Illuminate\Http\Request;

class VarUtamaYgDigunakanController extends Controller
{
    public function index()
    {
        $vars = VarUtamaYgDigunakan::all();
        return view('var_utama_yg_digunakan.index', compact('vars'));
    }

    public function create()
    {
        return view('var_utama_yg_digunakan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'konsep' => 'required|string',
            'definisi' => 'required|string',
            'referensi_waktu' => 'required|string|max:255',
            'sumber' => 'required|string|max:255',
        ]);

        VarUtamaYgDigunakan::create($validated);
        return redirect()->route('var_utama_yg_digunakan.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(VarUtamaYgDigunakan $varUtamaYgDigunakan)
    {
        return view('var_utama_yg_digunakan.edit', compact('varUtamaYgDigunakan'));
    }

    public function update(Request $request, VarUtamaYgDigunakan $varUtamaYgDigunakan)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'konsep' => 'required|string',
            'definisi' => 'required|string',
            'referensi_waktu' => 'required|string|max:255',
            'sumber' => 'required|string|max:255',
        ]);

        $varUtamaYgDigunakan->update($validated);
        return redirect()->route('var_utama_yg_digunakan.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(VarUtamaYgDigunakan $varUtamaYgDigunakan)
    {
        $varUtamaYgDigunakan->delete();
        return redirect()->route('var_utama_yg_digunakan.index')->with('success', 'Data berhasil dihapus!');
    }
}
