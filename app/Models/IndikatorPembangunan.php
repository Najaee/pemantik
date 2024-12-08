<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndikatorPembangunan extends Model
{
    use HasFactory;

    protected $table = 'indikator_pembangunan';

    protected $primaryKey = 'id_indikator_pembangunan';

    protected $fillable = [
        'publikasi_ketersediaan',
        'nama',
    ];

    public function detailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::class, 'id_indikator_pembangunan');
    }
}
