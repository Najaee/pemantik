<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PjJadwalKegiatan extends Model
{
    use HasFactory;

    protected $table = 'pj_jadwal_kegiatans';
    protected $primaryKey = 'id_pj_jadwal_kegiatan';
    protected $fillable = [
        'perencanaan_persiapan',
        'desain',
        'pengumpulan_data',
        'pengolahan',
        'analisis',
        'diseminasi',
        'evaluasi',
    ];

    public function detailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::class, 'id_pj_jadwal_kegiatan');
    }
}
