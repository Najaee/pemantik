<?php

namespace App\Http\Controllers;

use App\Models\PjJadwalKegiatan;
use Illuminate\Http\Request;

class PjJadwalKegiatanController extends Controller
{
    public function index()
    {
        $jadwals = PjJadwalKegiatan::all();
        return view('pj_jadwal_kegiatan.index', compact('jadwals'));
    }

    public function create()
    {
        return view('pj_jadwal_kegiatan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'perencanaan_persiapan' => 'required|string',
            'desain' => 'required|string',
            'pengumpulan_data' => 'required|string',
            'pengolahan' => 'required|string',
            'analisis' => 'required|string',
            'diseminasi' => 'required|string',
            'evaluasi' => 'required|string',
        ]);

        PjJadwalKegiatan::create($validated);
        return redirect()->route('pj_jadwal_kegiatan.index')->with('success', 'Jadwal kegiatan berhasil ditambahkan!');
    }

    public function edit(PjJadwalKegiatan $pjJadwalKegiatan)
    {
        return view('pj_jadwal_kegiatan.edit', compact('pjJadwalKegiatan'));
    }

    public function update(Request $request, PjJadwalKegiatan $pjJadwalKegiatan)
    {
        $validated = $request->validate([
            'perencanaan_persiapan' => 'required|string',
            'desain' => 'required|string',
            'pengumpulan_data' => 'required|string',
            'pengolahan' => 'required|string',
            'analisis' => 'required|string',
            'diseminasi' => 'required|string',
            'evaluasi' => 'required|string',
        ]);

        $pjJadwalKegiatan->update($validated);
        return redirect()->route('pj_jadwal_kegiatan.index')->with('success', 'Jadwal kegiatan berhasil diperbarui!');
    }

    public function destroy(PjJadwalKegiatan $pjJadwalKegiatan)
    {
        $pjJadwalKegiatan->delete();
        return redirect()->route('pj_jadwal_kegiatan.index')->with('success', 'Jadwal kegiatan berhasil dihapus!');
    }
}
