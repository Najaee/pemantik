<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Menampilkan daftar kegiatan
     */
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('kegiatan.index', compact('kegiatans'));
    }

    /**
     * Menampilkan form tambah kegiatan
     */
    public function create()
    {
        // Kirimkan sektor kegiatan sebagai opsi dropdown
        $sektor_kegiatan = [
            'Pertanian dan Perikanan',
            'Demografi dan Kependudukan',
            'Pembangunan',
            'Proyeksi Ekonomi',
            'Pendidikan dan Pelatihan',
            'Lingkungan',
            'Keuangan',
            'Globalisasi',
            'Kesehatan',
            'Industri dan Jasa',
            'Teknologi Informasi dan Komunikasi',
            'Perdagangan Internasional dan Neraca Perdagangan',
            'Ketenagakerjaan',
            'Neraca Nasional',
            'Indikator Ekonomi Bulanan',
            'Produktivitas',
            'Harga dan Paritas Daya Beli',
            'Sektor Publik, Perpajakan, dan Regulasi Pasar',
            'Perwilayahan dan Perkotaan',
            'Ilmu Pengetahuan dan Hak Paten',
            'Perlindungan Sosial dan Kesejahteraan',
            'Transportasi'
        ];
        return view('kegiatan.create', compact('sektor_kegiatan'));
    }

    /**
     * Menyimpan data kegiatan baru
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tahun' => 'required|digits:4|integer',
            'judul_kegiatan' => 'required|string|max:255',
            'sektor_kegiatan' => 'required|string|max:255',
            'telah_mendapat_rekomendasi' => 'required|boolean',
            'nomor_rekomendasi' => 'nullable|string|max:255',
            'latar_belakang' => 'required|string',
            'kegiatan' => 'required|string',
            'tujuan' => 'required|string',
            'manfaat_kegiatan' => 'required|string',
        ]);

        Kegiatan::create($validated);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    /**
     * Menampilkan form edit kegiatan
     */
    public function edit(Kegiatan $kegiatan)
    {
        // Kirimkan sektor kegiatan sebagai opsi dropdown
        $sektor_kegiatan = [
            'Pertanian dan Perikanan',
            'Demografi dan Kependudukan',
            'Pembangunan',
            'Proyeksi Ekonomi',
            'Pendidikan dan Pelatihan',
            'Lingkungan',
            'Keuangan',
            'Globalisasi',
            'Kesehatan',
            'Industri dan Jasa',
            'Teknologi Informasi dan Komunikasi',
            'Perdagangan Internasional dan Neraca Perdagangan',
            'Ketenagakerjaan',
            'Neraca Nasional',
            'Indikator Ekonomi Bulanan',
            'Produktivitas',
            'Harga dan Paritas Daya Beli',
            'Sektor Publik, Perpajakan, dan Regulasi Pasar',
            'Perwilayahan dan Perkotaan',
            'Ilmu Pengetahuan dan Hak Paten',
            'Perlindungan Sosial dan Kesejahteraan',
            'Transportasi'
        ];
        return view('kegiatan.edit', compact('kegiatan', 'sektor_kegiatan'));
    }

    /**
     * Memperbarui data kegiatan
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $validated = $request->validate([
            'tahun' => 'required|digits:4|integer',
            'judul_kegiatan' => 'required|string|max:255',
            'sektor_kegiatan' => 'required|string|max:255',
            'telah_mendapat_rekomendasi' => 'required|boolean',
            'nomor_rekomendasi' => 'nullable|string|max:255',
            'latar_belakang' => 'required|string',
            'kegiatan' => 'required|string',
            'tujuan' => 'required|string',
            'manfaat_kegiatan' => 'required|string',
        ]);

        $kegiatan->update($validated);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui!');
    }

    /**
     * Menghapus data kegiatan
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus!');
    }
}
