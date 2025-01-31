<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorModel extends Model
{
    use HasFactory;

    protected $table = 'warna';

    protected $guarded = [];

    public function pakaian(){
        return $this->belongsToMany(PakaianModel::class, 'warna_pivot', 'id_warna', 'id_pakaian', 'id', 'id');
    }
}
