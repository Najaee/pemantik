<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKegiatan extends Model
{
    use HasFactory;

    protected $table = 'detail_kegiatans';
    protected $primaryKey = 'id_detail_kegiatan'; // Tentukan primary key jika tidak menggunakan default 'id'

    protected $fillable = [
        'id_kegiatan', 'id_penyelenggara', 'id_pj_kegiatan', 'id_pj_teknis_kegiatan', 
        'id_walidata', 'id_pj_jadwal_kegiatan', 'id_var_utama_yg_digunakan', 
        'id_jml_pengumpulan_data', 'id_rancangan_lap_publikasi', 'id_metode_pengolahan', 
        'id_produk_data_utk_umum', 'id_petugas_pengumpulan_data', 'id_ds', 
        'id_ds_nonprobabilitas', 'id_ds_probabilitas', 'id_indikator_pembangunan', 
        'id_variabel_pembangunan', 'id_ms_indikator'
    ];

    // Relasi dengan tabel lainnya
    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
    }

    public function penyelenggara()
    {
        return $this->belongsTo(Penyelenggara::class, 'id_penyelenggara');
    }

    public function pjKegiatan()
    {
        return $this->belongsTo(PjKegiatan::class, 'id_pj_kegiatan');
    }

    public function pjTeknisKegiatan()
    {
        return $this->belongsTo(PjTeknisKegiatan::class, 'id_pj_teknis_kegiatan');
    }

    public function walidata()
    {
        return $this->belongsTo(Walidata::class, 'id_walidata');
    }

    public function pjJadwalKegiatan()
    {
        return $this->belongsTo(PjJadwalKegiatan::class, 'id_pj_jadwal_kegiatan');
    }

    public function varUtamaYgDigunakan()
    {
        return $this->belongsTo(VarUtamaYgDigunakan::class, 'id_var_utama_yg_digunakan');
    }

    public function jmlPengumpulanData()
    {
        return $this->belongsTo(JmlPengumpulanData::class, 'id_jml_pengumpulan_data');
    }

    public function rancanganLapPublikasi()
    {
        return $this->belongsTo(RancanganLapPublikasi::class, 'id_rancangan_lap_publikasi');
    }

    public function metodePengolahan()
    {
        return $this->belongsTo(MetodePengolahan::class, 'id_metode_pengolahan');
    }

    public function produkDataUtkUmum()
    {
        return $this->belongsTo(ProdukDataUtkUmum::class, 'id_produk_data_utk_umum');
    }

    public function petugasPengumpulanData()
    {
        return $this->belongsTo(PetugasPengumpulanData::class, 'id_petugas_pengumpulan_data');
    }

    public function desainSampel()
    {
        return $this->belongsTo(DesainSampel::class, 'id_ds');
    }

    public function dsNonprobabilitas()
    {
        return $this->belongsTo(DsNonprobabilitas::class, 'id_ds_nonprobabilitas');
    }

    public function dsProbabilitas()
    {
        return $this->belongsTo(DsProbabilitas::class, 'id_ds_probabilitas');
    }

    public function indikatorPembangunan()
    {
        return $this->belongsTo(IndikatorPembangunan::class, 'id_indikator_pembangunan');
    }

    public function variabelPembangunan()
    {
        return $this->belongsTo(VariabelPembangunan::class, 'id_variabel_pembangunan');
    }

    public function msIndikator()
    {
        return $this->belongsTo(MsIndikator::class, 'id_ms_indikator');
    }
}
