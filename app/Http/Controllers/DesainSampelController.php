<?php

namespace App\Http\Controllers;

use App\Models\DesainSampel;
use Illuminate\Http\Request;

class DesainSampelController extends Controller
{
    public function index()
    {
        $desainSampels = DesainSampel::all();
        return view('desain_sampel.index', compact('desainSampels'));
    }

    public function create()
    {
        return view('desain_sampel.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'metode_pemilihan_sampel_akhir' => 'required|string|max:255',
            'metode_yg_digunakan' => 'required|string|max:255',
            'jenis_rancangan_sampel' => 'required|string|max:255',
            'sarana_pengumpulan_data' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        DesainSampel::create($validated);

        return redirect()->route('desain_sampel.index')->with('success', 'Desain Sampel berhasil ditambahkan!');
    }

    public function edit(DesainSampel $desainSampel)
    {
        return view('desain_sampel.edit', compact('desainSampel'));
    }

    public function update(Request $request, DesainSampel $desainSampel)
    {
        // Validasi input
        $validated = $request->validate([
            'metode_pemilihan_sampel_akhir' => 'required|string|max:255',
            'metode_yg_digunakan' => 'required|string|max:255',
            'jenis_rancangan_sampel' => 'required|string|max:255',
            'sarana_pengumpulan_data' => 'required|string|max:255',
        ]);

        // Update data ke database
        $desainSampel->update($validated);

        return redirect()->route('desain_sampel.index')->with('success', 'Desain Sampel berhasil diperbarui!');
    }

    public function destroy(DesainSampel $desainSampel)
    {
        $desainSampel->delete();
        return redirect()->route('desain_sampel.index')->with('success', 'Desain Sampel berhasil dihapus!');
    }
}
