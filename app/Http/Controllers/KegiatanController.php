<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Menampilkan daftar kegiatan.
     */
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('kegiatan.index', compact('kegiatans'));
    }

    /**
     * Menampilkan form tambah kegiatan.
     */
    public function create()
    {
        return view('kegiatan.create');
    }

    /**
     * Menyimpan data kegiatan baru.
     */
    public function store(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'tahun' => 'required|digits:4|integer',
            'judul_kegiatan' => 'required|string|max:255',
            'sektor_kegiatan' => 'required|string|max:255',
            'rekomendasi_bps' => 'required|in:0,1',
            'nomor_rekomendasi' => 'nullable|string|max:255',
            'latar_belakang' => 'required|string',
            'kegiatan' => 'required|string',
            'tujuan_manfaat' => 'required|string',
        ]);

        // Simpan ke database
        Kegiatan::create($validated);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit kegiatan.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Memperbarui data kegiatan.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        // Validasi input form
        $validated = $request->validate([
            'tahun' => 'required|digits:4|integer',
            'judul_kegiatan' => 'required|string|max:255',
            'sektor_kegiatan' => 'required|string|max:255',
            'rekomendasi_bps' => 'required|in:0,1',
            'nomor_rekomendasi' => 'nullable|string|max:255',
            'latar_belakang' => 'required|string',
            'kegiatan' => 'required|string',
            'tujuan_manfaat' => 'required|string',
        ]);

        // Update data
        $kegiatan->update($validated);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui!');
    }

    /**
     * Menghapus data kegiatan.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus!');
    }
}
