<?php

namespace App\Http\Controllers;

use App\Models\KategoriModel;
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
    public function store(Request $request)
    {
        //
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
