<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariabelPembangunan extends Model
{
    use HasFactory;

    protected $table = 'variabel_pembangunan';

    protected $primaryKey = 'id_variabel_pembangunan';

    protected $fillable = [
        'kegiatan_penghasil',
        'kode_keg',
        'nama',
        'id_ttd',
    ];

    public function ttd()
    {
        return $this->belongsTo(Ttd::class, 'id_ttd', 'id_ttd');
    }
}
