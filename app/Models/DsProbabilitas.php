<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DsProbabilitas extends Model
{
    use HasFactory;

    protected $table = 'ds_probabilitas';
    protected $primaryKey = 'id_ds_probabilitas';
    protected $fillable = [
        'kerangka_sampel_tahap_akhir',
        'fraksi_sampel_keseluruhan',
        'sampling_eror_var_utama',
        'unit_sampel',
        'responden',
        'unit_observasi',
    ];

    public function detailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::class, 'id_ds_probabilitas');
    }
}

