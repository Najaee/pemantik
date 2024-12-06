<?php

namespace App\Http\Controllers;

use App\Models\RancanganLapPublikasi;
use Illuminate\Http\Request;

class RancanganLapPublikasiController extends Controller
{
    public function index()
    {
        $data = RancanganLapPublikasi::all();
        return view('rancangan_lap_publikasi.index', compact('data'));
    }

    public function create()
    {
        return view('rancangan_lap_publikasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rancangan_output' => 'required|string|max:255',
            'rancangan_deskripsi_var' => 'required|string',
        ]);

        RancanganLapPublikasi::create($request->all());
        return redirect()->route('rancangan_lap_publikasi.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = RancanganLapPublikasi::findOrFail($id);
        return view('rancangan_lap_publikasi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'rancangan_output' => 'required|string|max:255',
            'rancangan_deskripsi_var' => 'required|string',
        ]);

        $data = RancanganLapPublikasi::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('rancangan_lap_publikasi.index')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = RancanganLapPublikasi::findOrFail($id);
        $data->delete();
        return redirect()->route('rancangan_lap_publikasi.index')->with('success', 'Data berhasil dihapus.');
    }
}
