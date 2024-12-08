<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PakaianModel extends Model
{
    use HasFactory;
    protected $table = 'pakaian';
    protected $guarded = [];

    public function kategori(){
        return $this->belongsTo(KategoriModel::class, 'id_kategori', 'id');
    }

    public function warna(){
        return $this->belongsToMany(WarnaModel::class, 'warna_pivot', 'id_pakaian', 'id_warna');
    }
}
