<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiitemModel extends Model
{
    use HasFactory;

    protected $table ='transaksi_item';

    protected $guarded = [];

    public function transaksi(){
        return $this->belongsTo(TransaksiModel::class, 'transaksi_id');
    }
}
