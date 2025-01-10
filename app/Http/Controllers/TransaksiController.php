<?php

namespace App\Http\Controllers;

use App\Models\TransaksiModel;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index(){
        $data = [
            'transaksi' =>TransaksiModel::with('items')->get()
        ];
        return view('admin.transaksi.transaksi', $data);
    }
}
