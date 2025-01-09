<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiModel extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $guarded = [];

    public function items(){
        return $this->hasMany(TransaksiitemModel::class, 'transaksi_id');
    }

}
