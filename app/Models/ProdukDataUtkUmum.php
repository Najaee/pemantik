<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukDataUtkUmum extends Model
{
    use HasFactory;

    protected $table = 'produk_data_utk_umum';

    protected $primaryKey = 'id_produk_data_utk_umum';

    protected $fillable = [
        'spublikasi_tercetak',
        'publikasi_elektronik',
        'publikasi_data_mikro',
    ];

    public function detailKegiatans()
    {
        return $this->hasMany(DetailKegiatan::class, 'id_produk_data_utk_umum');
    }
}
