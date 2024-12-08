<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VarUtamaYgDigunakan extends Model
{
    use HasFactory;

    protected $table = 'var_utama_yg_digunakans';
    protected $primaryKey = 'id_var_utama_yg_digunakan';
    protected $fillable = [
        'nama',
        'konsep',
        'definisi',
        'referensi_waktu',
        'sumber',
    ];

    public function detailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::class, 'id_var_utama_yg_digunakan');
    }
}
