<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyelenggara extends Model
{
    use HasFactory;

    protected $table = 'penyelenggaras';
    protected $primaryKey = 'id_penyelenggara';
    protected $fillable = [
        'penanggungjawab',
        'perangkat_daerah_penyelenggara',
        'provinsi',
        'kabupaten_kota',
        'alamat_lengkap_penyelenggara',
    ];
}
