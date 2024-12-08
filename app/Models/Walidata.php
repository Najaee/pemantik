<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walidata extends Model
{
    use HasFactory;

    protected $table = 'walidatas';
    protected $primaryKey = 'id_walidata';
    protected $fillable = [
        'unit_kerja_walidata',
        'email',
    ];

    public function detailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::class, 'id_walidata');
    }
}
