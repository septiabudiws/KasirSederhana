<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePakaianRequest;
use App\Models\KategoriModel;
use App\Models\PakaianModel;
use App\Models\SizeModel;
use App\Models\WarnaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PakaianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'pakaians' => PakaianModel::with('warna', 'ukuran', 'kategori')->get()
        ];
        return view('admin.pakaian.pakaian', $data);
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



        $pakaian = PakaianModel::create([
            'token' => Str::random('12'),
            'nama_pakaian' => $request->nama,
            'kategori_id' => $request->kategori,
            'brand' => $request->brand,
            'stok_barang' => $request->stok,
            'harga' =>$request->harga,
            'deskripsi' => $request->deskripsi
        ]);

        $pakaian->warna()->sync($request->color, []);
        $pakaian->ukuran()->sync($request->size, []);

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
