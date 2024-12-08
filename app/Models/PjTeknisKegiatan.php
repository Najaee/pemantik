<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PjTeknisKegiatan extends Model
{
    use HasFactory;

    protected $table = 'pj_teknis_kegiatans';
    protected $primaryKey = 'id_pj_teknis_kegiatan';
    protected $fillable = [
        'nama',
        'jabatan',
        'alamat',
        'telepon',
        'email',
        'fax',
    ];
    public function detailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::class, 'id_pj_teknis_kegiatan');
    }
}
