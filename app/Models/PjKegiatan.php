<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PjKegiatan extends Model
{
    use HasFactory;

    protected $table = 'pj_kegiatans';
    protected $primaryKey = 'id_pj_kegiatan';
    protected $fillable = [
        'nama',
        'unit_kerja',
        'jabatan',
        'alamat',
        'telepon',
        'email',
        'fax',
    ];

    public function detailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::class, 'id_pj_kegiatan');
    }
}
