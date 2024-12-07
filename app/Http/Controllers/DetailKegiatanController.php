<?php

namespace App\Http\Controllers;

use App\Models\DetailKegiatan;
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
            'penyelenggaras', 'pjKegiatans', 'pjTeknisKegiatans', 'walidatas', 'pjJadwalKegiatans', 
            'varUtamaYgDigunakan', 'jmlPengumpulanData', 'rancanganLapPublikasi', 'metodePengolahan', 
            'produkDataUtkUmum', 'petugasPengumpulanData', 'desainSampels', 'dsNonprobabilitases', 
            'dsProbabilitases', 'indikatorPembangunans', 'variabelPembangunans', 'msIndikators'
        ));
    }

    public function store(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'id_penyelenggara' => 'required|exists:penyelenggaras,id',
            'id_pj_kegiatan' => 'required|exists:pj_kegiatans,id',
            'id_pj_teknis_kegiatan' => 'required|exists:pj_teknis_kegiatans,id',
            'id_walidata' => 'required|exists:walidatas,id',
            'id_pj_jadwal_kegiatan' => 'required|exists:pj_jadwal_kegiatans,id',
            'id_var_utama_yg_digunakan' => 'required|exists:var_utama_yg_digunakan,id',
            'id_jml_pengumpulan_data' => 'required|exists:jml_pengumpulan_data,id',
            'id_rancangan_lap_publikasi' => 'required|exists:rancangan_lap_publikasis,id',
            'id_metode_pengolahan' => 'required|exists:metode_pengolahans,id',
            'id_produk_data_utk_umum' => 'required|exists:produk_data_utk_umums,id',
            'id_petugas_pengumpulan_data' => 'required|exists:petugas_pengumpulan_datas,id',
            'id_ds' => 'required|exists:desain_sampels,id',
            'id_ds_nonprobabilitas' => 'required|exists:ds_nonprobabilitases,id',
            'id_ds_probabilitas' => 'required|exists:ds_probabilitases,id',
            'id_indikator_pembangunan' => 'required|exists:indikator_pembangunans,id',
            'id_variabel_pembangunan' => 'required|exists:variabel_pembangunans,id',
            'id_ms_indikator' => 'required|exists:ms_indikators,id',
        ]);

        // Menyimpan data DetailKegiatan
        DetailKegiatan::create($validated);

        return redirect()->route('detail_kegiatan.index')->with('success', 'Detail kegiatan berhasil ditambahkan');
    }

    public function edit($id)
    {
        // Mengambil data untuk form edit
        $detailKegiatan = DetailKegiatan::findOrFail($id);
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
            'detailKegiatan', 'penyelenggaras', 'pjKegiatans', 'pjTeknisKegiatans', 'walidatas', 
            'pjJadwalKegiatans', 'varUtamaYgDigunakan', 'jmlPengumpulanData', 
            'rancanganLapPublikasi', 'metodePengolahan', 'produkDataUtkUmum', 
            'petugasPengumpulanData', 'desainSampels', 'dsNonprobabilitases', 
            'dsProbabilitases', 'indikatorPembangunans', 'variabelPembangunans', 
            'msIndikators'
        ));
    }

    public function update(Request $request, $id)
    {
        // Validasi dan update data DetailKegiatan
        $validated = $request->validate([
            'id_penyelenggara' => 'required|exists:penyelenggaras,id',
            'id_pj_kegiatan' => 'required|exists:pj_kegiatans,id',
            'id_pj_teknis_kegiatan' => 'required|exists:pj_teknis_kegiatans,id',
            'id_walidata' => 'required|exists:walidatas,id',
            'id_pj_jadwal_kegiatan' => 'required|exists:pj_jadwal_kegiatans,id',
            'id_var_utama_yg_digunakan' => 'required|exists:var_utama_yg_digunakan,id',
            'id_jml_pengumpulan_data' => 'required|exists:jml_pengumpulan_data,id',
            'id_rancangan_lap_publikasi' => 'required|exists:rancangan_lap_publikasis,id',
            'id_metode_pengolahan' => 'required|exists:metode_pengolahans,id',
            'id_produk_data_utk_umum' => 'required|exists:produk_data_utk_umums,id',
            'id_petugas_pengumpulan_data' => 'required|exists:petugas_pengumpulan_datas,id',
            'id_ds' => 'required|exists:desain_sampels,id',
            'id_ds_nonprobabilitas' => 'required|exists:ds_nonprobabilitases,id',
            'id_ds_probabilitas' => 'required|exists:ds_probabilitases,id',
            'id_indikator_pembangunan' => 'required|exists:indikator_pembangunans,id',
            'id_variabel_pembangunan' => 'required|exists:variabel_pembangunans,id',
            'id_ms_indikator' => 'required|exists:ms_indikators,id',
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
