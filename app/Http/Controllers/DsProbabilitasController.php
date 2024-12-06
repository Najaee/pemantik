<?php

namespace App\Http\Controllers;

use App\Models\DsProbabilitas;
use Illuminate\Http\Request;

class DsProbabilitasController extends Controller
{
    public function index()
    {
        $items = DsProbabilitas::all();
        return view('ds_probabilitas.index', compact('items'));
    }

    public function create()
    {
        return view('ds_probabilitas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kerangka_sampel_tahap_akhir' => 'required|string|max:255',
            'fraksi_sampel_keseluruhan' => 'required|string|max:255',
            'sampling_eror_var_utama' => 'required|string|max:255',
            'unit_sampel' => 'required|string|max:255',
            'responden' => 'required|string|max:255',
            'unit_observasi' => 'required|string|max:255',
        ]);

        DsProbabilitas::create($validated);
        return redirect()->route('ds_probabilitas.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(DsProbabilitas $dsProbabilitas)
    {
        return view('ds_probabilitas.edit', compact('dsProbabilitas'));
    }

    public function update(Request $request, DsProbabilitas $dsProbabilitas)
    {
        $validated = $request->validate([
            'kerangka_sampel_tahap_akhir' => 'required|string|max:255',
            'fraksi_sampel_keseluruhan' => 'required|string|max:255',
            'sampling_eror_var_utama' => 'required|string|max:255',
            'unit_sampel' => 'required|string|max:255',
            'responden' => 'required|string|max:255',
            'unit_observasi' => 'required|string|max:255',
        ]);

        $dsProbabilitas->update($validated);
        return redirect()->route('ds_probabilitas.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(DsProbabilitas $dsProbabilitas)
    {
        $dsProbabilitas->delete();
        return redirect()->route('ds_probabilitas.index')->with('success', 'Data berhasil dihapus!');
    }
}
