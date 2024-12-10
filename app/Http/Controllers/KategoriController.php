<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $kategori = KategoriModel::withCount('pakaian')->get();

        return view('admin.kategori.kategori', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|unique:kategori,nama_kategori'
        ],[
            'kategori.unique' => 'Kategori Sudah Digunakan'
        ]);

        $data = [
            'nama_kategori' => $request->kategori
        ];

        KategoriModel::create($data);
        return redirect('/kategori')->with('succes', 'Berhasil Menambahkan Kategori');
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'kategori' => 'required|unique:kategori,nama_kategori'
        ],[
            'kategori.unique' => 'Kategori Sudah Digunakan'
        ]);

        $data = [
            'nama_kategori' => $request->kategori
        ];

        KategoriModel::where('id', $id)->update($data);

        return redirect('/kategori')->with(['success', 'Berhasil Mengubah Nama Kategori']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        KategoriModel::where('id', $id)->delete();

        return redirect('/kategori')->with(['success', 'Berhasil Menghapus Kategori']);
    }
}
