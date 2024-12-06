<?php

namespace App\Http\Controllers;

use App\Models\DetailKegiatan;
use Illuminate\Http\Request;

class DetailKegiatanController extends Controller
{
    public function index()
    {
        // Mengambil data dengan relasi
        $detailKegiatans = DetailKegiatan::with([
            'kegiatan',
            'penyelenggara',
            'pjKegiatan',
            'pjTeknisKegiatan',
            'walidata',
            'pjJadwalKegiatan',
            'varUtama',
            'jmlPengumpulanData',
            'rancanganPublikasi',
            'metodePengolahan',
            'produkData',
            'petugasPengumpulanData',
            'desainSampel',
            'dsNonProbabilitas',
            'dsProbabilitas',
            'indikatorPembangunan',
            'variabelPembangunan',
            'msIndikator',
        ])->get();

        return view('detail_kegiatan.index', compact('detailKegiatans'));
    }

    public function create()
    {
        // Anda bisa mengirimkan data relasi ke view untuk dropdown atau opsi lainnya
        return view('detail_kegiatan.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_kegiatan' => 'required|exists:kegiatans,id_kegiatan',
            'id_penyelenggara' => 'required|exists:penyelenggaras,id_penyelenggara',
            'id_pj_kegiatan' => 'required|exists:pj_kegiatans,id_pj_kegiatan',
            'id_pj_teknis_kegiatan' => 'required|exists:pj_teknis_kegiatans,id_pj_teknis_kegiatan',
            'id_walidata' => 'required|exists:walidatas,id_walidata',
            'id_pj_jadwal_kegiatan' => 'required|exists:pj_jadwal_kegiatans,id_pj_jadwal_kegiatan',
            'id_var_utama_yg_digunakan' => 'required|exists:var_utama_yg_digunakans,id_var_utama_yg_digunakan',
            'id_jml_pengumpulan_data' => 'required|exists:jml_pengumpulan_data,id_jml_pengumpulan_data',
            'id_rancangan_lap_publikasi' => 'required|exists:rancangan_lap_publikasi,id_rancangan_lap_publikasi',
            'id_metode_pengolahan' => 'required|exists:metode_pengolahan,id_metode_pengolahan',
            'id_produk_data_utk_umum' => 'required|exists:produk_data_utk_umum,id_produk_data_utk_umum',
            'id_petugas_pengumpulan_data' => 'required|exists:petugas_pengumpulan_data,id_petugas_pengumpulan_data',
            'id_ds' => 'required|exists:desain_sampels,id_ds',
            'id_ds_nonprobabilitas' => 'required|exists:ds_nonprobabilitas,id_ds_nonprobabilitas',
            'id_ds_probabilitas' => 'required|exists:ds_probabilitas,id_ds_probabilitas',
            'id_indikator_pembangunan' => 'required|exists:indikator_pembangunan,id_indikator_pembangunan',
            'id_variabel_pembangunan' => 'required|exists:variabel_pembangunan,id_variabel_pembangunan',
            'id_ms_indikator' => 'required|exists:ms_indikator,id_ms_indikator',
        ]);

        DetailKegiatan::create($validated);

        return redirect()->route('detail_kegiatan.index')->with('success', 'Data berhasil disimpan!');
    }

    public function edit(DetailKegiatan $detailKegiatan)
    {
        // Mengirim data relasi untuk edit
        $detailKegiatan->load([
            'kegiatan',
            'penyelenggara',
            'pjKegiatan',
            'pjTeknisKegiatan',
            'walidata',
            'pjJadwalKegiatan',
            'varUtama',
            'jmlPengumpulanData',
            'rancanganPublikasi',
            'metodePengolahan',
            'produkData',
            'petugasPengumpulanData',
            'desainSampel',
            'dsNonProbabilitas',
            'dsProbabilitas',
            'indikatorPembangunan',
            'variabelPembangunan',
            'msIndikator',
        ]);

        return view('detail_kegiatan.edit', compact('detailKegiatan'));
    }

    public function update(Request $request, DetailKegiatan $detailKegiatan)
    {
        $validated = $request->validate([
            'id_kegiatan' => 'required|exists:kegiatans,id_kegiatan',
            'id_penyelenggara' => 'required|exists:penyelenggaras,id_penyelenggara',
            'id_pj_kegiatan' => 'required|exists:pj_kegiatans,id_pj_kegiatan',
            'id_pj_teknis_kegiatan' => 'required|exists:pj_teknis_kegiatans,id_pj_teknis_kegiatan',
            'id_walidata' => 'required|exists:walidatas,id_walidata',
            'id_pj_jadwal_kegiatan' => 'required|exists:pj_jadwal_kegiatans,id_pj_jadwal_kegiatan',
            'id_var_utama_yg_digunakan' => 'required|exists:var_utama_yg_digunakans,id_var_utama_yg_digunakan',
            'id_jml_pengumpulan_data' => 'required|exists:jml_pengumpulan_data,id_jml_pengumpulan_data',
            'id_rancangan_lap_publikasi' => 'required|exists:rancangan_lap_publikasi,id_rancangan_lap_publikasi',
            'id_metode_pengolahan' => 'required|exists:metode_pengolahan,id_metode_pengolahan',
            'id_produk_data_utk_umum' => 'required|exists:produk_data_utk_umum,id_produk_data_utk_umum',
            'id_petugas_pengumpulan_data' => 'required|exists:petugas_pengumpulan_data,id_petugas_pengumpulan_data',
            'id_ds' => 'required|exists:desain_sampels,id_ds',
            'id_ds_nonprobabilitas' => 'required|exists:ds_nonprobabilitas,id_ds_nonprobabilitas',
            'id_ds_probabilitas' => 'required|exists:ds_probabilitas,id_ds_probabilitas',
            'id_indikator_pembangunan' => 'required|exists:indikator_pembangunan,id_indikator_pembangunan',
            'id_variabel_pembangunan' => 'required|exists:variabel_pembangunan,id_variabel_pembangunan',
            'id_ms_indikator' => 'required|exists:ms_indikator,id_ms_indikator',
        ]);

        $detailKegiatan->update($validated);

        return redirect()->route('detail_kegiatan.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(DetailKegiatan $detailKegiatan)
    {
        $detailKegiatan->delete();
        return redirect()->route('detail_kegiatan.index')->with('success', 'Data berhasil dihapus!');
    }
}
