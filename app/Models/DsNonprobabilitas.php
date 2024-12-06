<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DsNonprobabilitas extends Model
{
    use HasFactory;

    protected $table = 'ds_nonprobabilitas';
    protected $primaryKey = 'id_ds_nonprobabilitas';
    protected $fillable = [
        'unit_sampel',
        'unit_observasi',
    ];
}
