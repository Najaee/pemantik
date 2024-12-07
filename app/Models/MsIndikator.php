<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MsIndikator extends Model
{
    use HasFactory;

    protected $table = 'ms_indikator';

    protected $primaryKey = 'id_ms_indikator';

    protected $fillable = [
        'nama',
        'konsep',
        'definisi',
        'interpretasi',
        'metode_rumus_perhitungan',
        'ukuran',
        'satuan',
        'klasifikasi_penyajian',
        'indikator_composit',
        'level_estimasi',
        'dapat_diakses_umum',
        'id_indikator_pembangunan',
        'id_variabel_pembangunan',
    ];

    public function indikatorPembangunan()
    {
        return $this->belongsTo(IndikatorPembangunan::class, 'id_indikator_pembangunan', 'id_indikator_pembangunan');
    }

    public function variabelPembangunan()
    {
        return $this->belongsTo(VariabelPembangunan::class, 'id_variabel_pembangunan', 'id_variabel_pembangunan');
    }

    public function detailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::class, 'id_ms_indikator');
    }
}
