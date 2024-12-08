<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JmlPengumpulanData extends Model
{
    use HasFactory;

    protected $table = 'jml_pengumpulan_data';

    protected $primaryKey = 'id_jml_pengumpulan_data';

    protected $fillable = [
        'supervisor',
        'enum',
        'pelatihan_pengumpul_data',
    ];

    public function detailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::class, 'id_jml_pengumpulan_data');
    }
}
