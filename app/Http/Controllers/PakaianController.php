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

        $gambar = $request->file('gambar');
        $token = uniqid();

        $file_name = $token . "." . $gambar->getClientOriginalExtension();

        $pakaian = PakaianModel::create([
            'token' => Str::random('12'),
            'nama_pakaian' => $request->nama,
            'kategori_id' => $request->kategori,
            'brand' => $request->brand,
            'stok_barang' => $request->stok,
            'harga' =>$request->harga,
            'deskripsi' => $request->deskripsi,
            'gambar' => $file_name
        ]);

        $pakaian->warna()->sync($request->color, []);
        $pakaian->ukuran()->sync($request->size, []);

        $gambar->move('gambar_produk', $file_name);

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
    public function edit($id)
    {
        $pakaians =PakaianModel::with('warna', 'ukuran', 'kategori')->where('token', $id)->first();

        $data = [
            'pakaians' =>$pakaians,
            'kategori' => KategoriModel::all(),
            'size' => SizeModel::all(),
            'color' => WarnaModel::all(),
            'selectedColor' => $pakaians->warna->pluck('id')->toArray(),
            'selectedSize' => $pakaians->ukuran->pluck('id')->toArray()
        ];

        return view('admin.pakaian.pakaian_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{

    $pakaian = PakaianModel::where('token', $id)->first();


    $data = [
        'nama_pakaian' => $request->nama,
        'kategori_id' => $request->kategori,
        'brand' => $request->brand,
        'stok_barang' => $request->stok,
        'harga' => $request->harga,
        'deskripsi' => $request->deskripsi,
    ];


    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $file_name = uniqid() . '.' . $gambar->getClientOriginalExtension();


        $data['gambar'] = $file_name;


        $gambar->move('gambar_produk', $file_name);


        if ($pakaian->gambar && file_exists(public_path('gambar_produk/' . $pakaian->gambar))) {
            unlink(public_path('gambar_produk/' . $pakaian->gambar));
        }
    }


    $pakaian->update($data);

    
    $pakaian->warna()->sync($request->color, []);
    $pakaian->ukuran()->sync($request->size, []);

    return redirect('/pakaian')->with('success', 'Data pakaian berhasil diperbarui');
}




    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        PakaianModel::where('token', $id)->delete();

        return redirect('/pakaian');
    }
}
