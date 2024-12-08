<?php

namespace App\Http\Controllers;

use App\Models\DetailKegiatan;
use App\Models\Kegiatan;
use App\Models\Penyelenggara;
use App\Models\PjKegiatan;
use App\Models\PjTeknisKegiatan;
use App\Models\Walidata;
use App\Models\PjJadwalKegiatan;
use App\Models\VarUtamaYgDigunakan;
use App\Models\JmlPengumpulanData;
use App\Models\RancanganLapPublikasi;
use App\Models\MetodePengolahan;
use App\Models\ProdukDataUtkUmum;
use App\Models\PetugasPengumpulanData;
use App\Models\DesainSampel;
use App\Models\DsNonprobabilitas;
use App\Models\DsProbabilitas;
use App\Models\IndikatorPembangunan;
use App\Models\VariabelPembangunan;
use App\Models\MsIndikator;
use Illuminate\Http\Request;

class DetailKegiatanController extends Controller
{
    public function index()
    {
        $detailKegiatans = DetailKegiatan::all();
        return view('detail_kegiatan.index', compact('detailKegiatans'));
    }

    public function create()
    {
        // Mengambil data terkait untuk form pembuatan DetailKegiatan
        $kegiatans = Kegiatan::all();
        $penyelenggaras = Penyelenggara::all();
        $pjKegiatans = PjKegiatan::all();
        $pjTeknisKegiatans = PjTeknisKegiatan::all();
        $walidatas = Walidata::all();
        $pjJadwalKegiatans = PjJadwalKegiatan::all();
        $varUtamaYgDigunakan = VarUtamaYgDigunakan::all();
        $jmlPengumpulanData = JmlPengumpulanData::all();
        $rancanganLapPublikasi = RancanganLapPublikasi::all();
        $metodePengolahan = MetodePengolahan::all();
        $produkDataUtkUmum = ProdukDataUtkUmum::all();
        $petugasPengumpulanData = PetugasPengumpulanData::all();
        $desainSampels = DesainSampel::all();
        $dsNonprobabilitases = DsNonprobabilitas::all();
        $dsProbabilitases = DsProbabilitas::all();
        $indikatorPembangunans = IndikatorPembangunan::all();
        $variabelPembangunans = VariabelPembangunan::all();
        $msIndikators = MsIndikator::all();

        return view('detail_kegiatan.create', compact(
            'penyelenggaras',
            'pjKegiatans',
            'pjTeknisKegiatans',
            'walidatas',
            'pjJadwalKegiatans',
            'varUtamaYgDigunakan',
            'jmlPengumpulanData',
            'rancanganLapPublikasi',
            'metodePengolahan',
            'produkDataUtkUmum',
            'petugasPengumpulanData',
            'desainSampels',
            'dsNonprobabilitases',
            'dsProbabilitases',
            'indikatorPembangunans',
            'variabelPembangunans',
            'msIndikators',
            'kegiatans'
        ));
    }

    public function store(Request $request)
    {
        // Validasi input form
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

        // Menyimpan data DetailKegiatan
        DetailKegiatan::create($validated);

        return redirect()->route('detail_kegiatan.index')->with('success', 'Detail kegiatan berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Mengambil data untuk form edit
        $detailKegiatan = DetailKegiatan::findOrFail($id);
        $kegiatans = Kegiatan::all();
        $penyelenggaras = Penyelenggara::all();
        $pjKegiatans = PjKegiatan::all();
        $pjTeknisKegiatans = PjTeknisKegiatan::all();
        $walidatas = Walidata::all();
        $pjJadwalKegiatans = PjJadwalKegiatan::all();
        $varUtamaYgDigunakan = VarUtamaYgDigunakan::all();
        $jmlPengumpulanData = JmlPengumpulanData::all();
        $rancanganLapPublikasi = RancanganLapPublikasi::all();
        $metodePengolahan = MetodePengolahan::all();
        $produkDataUtkUmum = ProdukDataUtkUmum::all();
        $petugasPengumpulanData = PetugasPengumpulanData::all();
        $desainSampels = DesainSampel::all();
        $dsNonprobabilitases = DsNonprobabilitas::all();
        $dsProbabilitases = DsProbabilitas::all();
        $indikatorPembangunans = IndikatorPembangunan::all();
        $variabelPembangunans = VariabelPembangunan::all();
        $msIndikators = MsIndikator::all();

        return view('detail_kegiatan.edit', compact(
            'detailKegiatan',
            'penyelenggaras',
            'pjKegiatans',
            'pjTeknisKegiatans',
            'walidatas',
            'pjJadwalKegiatans',
            'varUtamaYgDigunakan',
            'jmlPengumpulanData',
            'rancanganLapPublikasi',
            'metodePengolahan',
            'produkDataUtkUmum',
            'petugasPengumpulanData',
            'desainSampels',
            'dsNonprobabilitases',
            'dsProbabilitases',
            'indikatorPembangunans',
            'variabelPembangunans',
            'msIndikators',
            'kegiatans'
        ));
    }

    public function update(Request $request, $id)
    {
        // Validasi dan update data DetailKegiatan
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

        $detailKegiatan = DetailKegiatan::findOrFail($id);
        $detailKegiatan->update($validated);

        return redirect()->route('detail_kegiatan.index')->with('success', 'Detail kegiatan berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Menghapus DetailKegiatan berdasarkan ID
        DetailKegiatan::destroy($id);
        return redirect()->route('detail_kegiatan.index')->with('success', 'Detail kegiatan berhasil dihapus');
    }
}
