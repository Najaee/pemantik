<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePengolahan extends Model
{
    use HasFactory;

    protected $table = 'metode_pengolahan';

    protected $primaryKey = 'id_metode_pengolahan';

    protected $fillable = [
        'editing',
        'coding',
        'input_data',
        'penyahihan',
        'microdata_rawdata',
        'metode_lain',
        'metode_analisis',
        'unit_analisis',
        'tingkat_penyajian_data',
    ];
}
