<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ttd extends Model
{
    use HasFactory;

    protected $table = 'ttd';

    protected $primaryKey = 'id_ttd';

    protected $fillable = [
        'waktu_tempat',
        'kep_dinas',
        'nip',
        'ttd_image',
    ];
}
