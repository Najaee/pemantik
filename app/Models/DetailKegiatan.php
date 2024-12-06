<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailKegiatan extends Model
{
    use HasFactory;

    protected $table = 'detail_kegiatans';
    protected $primaryKey = 'id_detail_kegiatan';

    protected $fillable = [
        'id_kegiatan',
        'id_penyelenggara',
        'id_pj_kegiatan',
        'id_pj_teknis_kegiatan',
        'id_walidata',
        'id_pj_jadwal_kegiatan',
        'id_var_utama_yg_digunakan',
        'id_jml_pengumpulan_data',
        'id_rancangan_lap_publikasi',
        'id_metode_pengolahan',
        'id_produk_data_utk_umum',
        'id_petugas_pengumpulan_data',
        'id_desain_sampel',
        'id_ds_nonprobabilitas',
        'id_ds_probabilitas',
        'id_indikator_pembangunan',
        'id_variabel_pembangunan',
        'id_ms_indikator',
    ];

        //relasi
        public function kegiatan()
        {
            return $this->belongsTo(Kegiatan::class, 'id_kegiatan');
        }
    
        public function penyelenggara()
        {
            return $this->belongsTo(Penyelenggara::class, 'id_penyelenggara');
        }
    
        public function pj_kegiatan()
        {
            return $this->belongsTo(PjKegiatan::class, 'id_pj_kegiatan');
        }
    
        public function pj_teknis_kegiatan()
        {
            return $this->belongsTo(PjTeknisKegiatan::class, 'id_pj_teknis_kegiatan');
        }
    
        public function walidata()
        {
            return $this->belongsTo(Walidata::class, 'id_walidata');
        }
    
        public function pj_jadwal_kegiatan()
        {
            return $this->belongsTo(PjJadwalKegiatan::class, 'id_pj_jadwal_kegiatan');
        }
    
        public function var_utama_yg_digunakan()
        {
            return $this->belongsTo(VarUtamaYgDigunakan::class, 'id_var_utama_yg_digunakan');
        }
    
        public function jml_pengumpulan_data()
        {
            return $this->belongsTo(JmlPengumpulanData::class, 'id_jml_pengumpulan_data');
        }
    
        public function rancangan_lap_publikasi()
        {
            return $this->belongsTo(RancanganLapPublikasi::class, 'id_rancangan_lap_publikasi');
        }
    
        public function metode_pengolahan()
        {
            return $this->belongsTo(MetodePengolahan::class, 'id_metode_pengolahan');
        }
    
        public function produk_data_utk_umum()
        {
            return $this->belongsTo(ProdukDataUtkUmum::class, 'id_produk_data_utk_umum');
        }
    
        public function petugas_pengumpulan_data()
        {
            return $this->belongsTo(PetugasPengumpulanData::class, 'id_petugas_pengumpulan_data');
        }
    
        public function desain_Sampel()
        {
            return $this->belongsTo(DesainSampel::class, 'id_ds');
        }
    
        public function ds_nonprobabilitas()
        {
            return $this->belongsTo(DsNonprobabilitas::class, 'id_ds_nonprobabilitas');
        }
    
        public function ds_probabilitas()
        {
            return $this->belongsTo(DsProbabilitas::class, 'id_ds_probabilitas');
        }
    
        public function indikator_pembangunan()
        {
            return $this->belongsTo(IndikatorPembangunan::class, 'id_indikator_pembangunan');
        }
    
        public function variabel_pembangunan()
        {
            return $this->belongsTo(VariabelPembangunan::class, 'id_variabel_pembangunan');
        }
    
        public function ms_indikator()
        {
            return $this->belongsTo(MsIndikator::class, 'id_ms_indikator');
        }
    
    }

