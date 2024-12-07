<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesainSampel extends Model
{
    use HasFactory;

    protected $table = 'desain_sampels';
    protected $primaryKey = 'id_ds';

    protected $fillable = [
        'metode_pemilihan_sampel_akhir',
        'metode_yg_digunakan',
        'jenis_rancangan_sampel',
        'sarana_pengumpulan_data',
    ];
}
