<?php

namespace App\Http\Controllers;

use App\Models\PetugasPengumpulanData;
use Illuminate\Http\Request;

class PetugasPengumpulanDataController extends Controller
{
    public function index()
    {
        $petugas = PetugasPengumpulanData::all();
        return view('petugas_pengumpulan_data.index', compact('petugas'));
    }

    public function create()
    {
        return view('petugas_pengumpulan_data.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cara_pengumpulan_data' => 'required|string',
            'kegiatan_ini_dilakukan' => 'required|string',
            'frekuensi_penyelenggara_kegiatan' => 'required|string',
            'tipe_pengumpulan_data' => 'required|string',
            'metode_pengumpulan_data' => 'required|string',
            'unit_pengumpulan_data' => 'required|string',
            'cakupan_wilayah_data' => 'required|string',
            'wilayah_data' => 'required|string',
            'pilot_survey' => 'required|boolean',
            'metode_pemeriksaan_kualitas_pengumpulan_data' => 'required|string',
            'penyesuaian_nonresponden' => 'required|boolean',
            'petugas_pengumpulan_data' => 'required|string',
            'persyaratan_petugas_pengumpulan_data' => 'required|string',
        ]);

        PetugasPengumpulanData::create($validated);
        return redirect()->route('petugas_pengumpulan_data.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(PetugasPengumpulanData $petugas_pengumpulan_data)
    {
        return view('petugas_pengumpulan_data.edit', compact('petugas_pengumpulan_data'));
    }

    public function update(Request $request, PetugasPengumpulanData $petugas_pengumpulan_data)
    {
        $validated = $request->validate([
            'cara_pengumpulan_data' => 'required|string',
            'kegiatan_ini_dilakukan' => 'required|string',
            'frekuensi_penyelenggara_kegiatan' => 'required|string',
            'tipe_pengumpulan_data' => 'required|string',
            'metode_pengumpulan_data' => 'required|string',
            'unit_pengumpulan_data' => 'required|string',
            'cakupan_wilayah_data' => 'required|string',
            'wilayah_data' => 'required|string',
            'pilot_survey' => 'required|boolean',
            'metode_pemeriksaan_kualitas_pengumpulan_data' => 'required|string',
            'penyesuaian_nonresponden' => 'required|boolean',
            'petugas_pengumpulan_data' => 'required|string',
            'persyaratan_petugas_pengumpulan_data' => 'required|string',
        ]);

        $petugas_pengumpulan_data->update($validated);
        return redirect()->route('petugas_pengumpulan_data.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(PetugasPengumpulanData $petugas_pengumpulan_data)
    {
        $petugas_pengumpulan_data->delete();
        return redirect()->route('petugas_pengumpulan_data.index')->with('success', 'Data berhasil dihapus!');
    }
}
