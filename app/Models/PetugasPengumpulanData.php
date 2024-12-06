<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetugasPengumpulanData extends Model
{
    use HasFactory;

    protected $table = 'petugas_pengumpulan_data';
    protected $primaryKey = 'id_petugas_pengumpulan_data';
    protected $fillable = [
        'cara_pengumpulan_data',
        'kegiatan_ini_dilakukan',
        'frekuensi_penyelenggara_kegiatan',
        'tipe_pengumpulan_data',
        'metode_pengumpulan_data',
        'unit_pengumpulan_data',
        'cakupan_wilayah_data',
        'wilayah_data',
        'pilot_survey',
        'metode_pemeriksaan_kualitas_pengumpulan_data',
        'penyesuaian_nonresponden',
        'petugas_pengumpulan_data',
        'persyaratan_petugas_pengumpulan_data',
    ];
}
