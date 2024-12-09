<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePakaianRequest;
use App\Models\KategoriModel;
use App\Models\PakaianModel;
use App\Models\SizeModel;
use App\Models\WarnaModel;
use Illuminate\Http\Request;

class PakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pakaian.pakaian');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $size = SizeModel::all();
        $color = WarnaModel::all();
        $kategori = KategoriModel::all();

        return view('admin.pakaian.pakaian_tambah', compact('size', 'color', 'kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePakaianRequest $request)
    {

        $validateData = $request->validated();

        $pakaian = PakaianModel::create([
            'nama_pakaian' => $validateData['nama'],
            'kategori_id' => $validateData['kategori'],
            'brand' => $validateData['brand'],
            'stok_barang' => $validateData['stok'],
            'harga' =>$validateData['harga'],
            'deskripsi' => $validateData['deskripsi']
        ]);

        $pakaian->warna()->sync($validateData['color'] ?? []);
        $pakaian->ukuran()->sync($validateData['size'] ?? []);

        return redirect('/pakaian')->with('success', 'Produk Baru Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
