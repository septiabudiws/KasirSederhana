<?php

namespace App\Http\Controllers;

use App\Models\ColorModel;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $color = ColorModel::all();

        return view('admin.color.color', compact('color'));
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
            'color' => 'required|unique:warna,warna'
        ], [
            'color.unique' =>'Warna Sudah Ada'
        ]);

        $data =[
            'warna' =>$request->color
        ];

        ColorModel::create($data);
        return redirect('/color')->with('succes', 'Warna Berhasil Ditambahkan');
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
            'color' => 'required|unique:warna,warna'
        ], [
            'color.unique' =>'Warna Sudah Ada'
        ]);

        $data =[
            'warna' =>$request->color
        ];

        ColorModel::where('id', $id)->update($data);
        return redirect('/color')->with('succes', 'Warna Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        ColorModel::where('id', $id)->delete();

        return redirect('/color')->with('success', 'Berhasil Menghapus Warna');
    }
}
