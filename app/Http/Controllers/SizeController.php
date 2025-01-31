<?php

namespace App\Http\Controllers;

use App\Models\SizeModel;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $size = SizeModel::withCount('pakaian')->get();
        // dd($size);

        return view('admin.size.size', compact('size'));
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
            'size' =>'required|unique:ukuran,ukuran'
        ],[
            'size.unique' => 'Ukuran Sudah Ada, Gunakan Ukuran Lain'
        ]);

        $data = [
            'ukuran' =>$request->size
        ];

        SizeModel::create($data);
        return redirect('/size')->with('succes', 'Ukuran Berhasil Ditambah');
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
            'size' =>'required|unique:ukuran,ukuran'
        ],[
            'size.unique' => 'Ukuran Sudah Ada, Gunakan Ukuran Lain'
        ]);

        $data = [
            'ukuran' =>$request->size
        ];

        SizeModel::where('id', $id)->update($data);
        return redirect('/size')->with('succes', 'Ukuran Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SizeModel::where('id', $id)->delete();

        return redirect('/size')->with('success', 'Berhasil Mengapus Ukuran');
    }
}
