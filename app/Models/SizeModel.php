<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeModel extends Model
{
    use HasFactory;

    protected $table = 'ukuran';

    protected $guarded = [];

    public function pakaian(){
        return $this->belongsToMany(PakaianModel::class, 'ukuran_pivot', 'id_ukuran', 'id_pakaian', 'id', 'id');
    }
}
