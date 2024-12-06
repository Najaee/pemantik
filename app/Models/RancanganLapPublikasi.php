<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RancanganLapPublikasi extends Model
{
    use HasFactory;

    protected $table = 'rancangan_lap_publikasi';

    protected $primaryKey = 'id_rancangan_lap_publikasi';

    protected $fillable = [
        'rancangan_output',
        'rancangan_deskripsi_var',
    ];
}
