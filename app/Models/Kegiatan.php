<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatans';
    protected $primaryKey = 'id_kegiatan';
    protected $fillable = [
        'tahun',
        'judul_kegiatan',
        'sektor_kegiatan',
        'rekomendasi_bps',
        'nomor_rekomendasi',
        'latar_belakang',
        'kegiatan',
        'tujuan_manfaat',
    ];

    public function detailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::class, 'id_kegiatan');
    }
}
