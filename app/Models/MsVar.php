<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsVar extends Model
{
    use HasFactory;

    protected $table = 'ms_var';

    protected $primaryKey = 'id_ms_var';

    protected $fillable = [
        'alias',
        'referensi_pemilihan',
        'id_detail_kegiatan',
        'tipe_data',
        'klasifikasi_isian',
        'aturan_validasi',
        'kalimat_pernyataan',
        'kolom_2_diakses_umum',
    ];

    public function detailKegiatan()
    {
        return $this->belongsTo(DetailKegiatan::class, 'id_detail_kegiatan', 'id_detail_kegiatan');
    }
}
