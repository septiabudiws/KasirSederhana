<?php

namespace App\Http\Controllers;

use App\Models\PakaianModel;
use Illuminate\Http\Request;
use App\Models\TransaksiitemModel;
use App\Models\TransaksiModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'pakaians' => PakaianModel::with('warna', 'ukuran', 'kategori')->get(),
            'produk' => PakaianModel::count(),
            'pendapatan' =>TransaksiModel::sum('total_pesanan'),
            'transaksi' =>TransaksiModel::count(),
            'karyawan' => User::role('karyawan')->count()
        ];

        return view('admin.dashboard', $data);
    }

    public function storePesanan(Request $request)
{
    $request->validate([
        'nama_produk' => 'required|array',
        'nama_produk.*' => 'required|string',
        'brand.*' => 'required|string',
        'harga.*' => 'required|numeric',
        'jumlah.*' => 'required|integer|min:1',
    ]);

    $totalPesanan = 0;
    foreach ($request->harga as $key => $harga) {
        $totalPesanan += $harga * $request->jumlah[$key];
    }

    $transaksi = TransaksiModel::create([
        'token' => uniqid('TRX-'),
        'total_pesanan' => $totalPesanan,
        'tanggal_transaksi' => now(),
    ]);

    foreach ($request->nama_produk as $key => $nama_produk) {
        TransaksiitemModel::create([
            'transaksi_id' => $transaksi->id,
            'nama_produk' => $nama_produk,
            'brand' => $request->brand[$key],
            'harga' => $request->harga[$key],
            'jumlah' => $request->jumlah[$key],
            'total' => $request->harga[$key] * $request->jumlah[$key],
        ]);
        $produk = PakaianModel::where('nama_pakaian', $nama_produk)->first();

        if ($produk) {
            if ($produk->stok_barang >= $request->jumlah[$key]) {
                $produk->stok_barang -= $request->jumlah[$key];
                $produk->save();
            } else {
                return back()->withErrors([
                    'message' => "Stok untuk produk {$nama_produk} tidak mencukupi.",
                ]);
            }
        } else {
            return back()->withErrors([
                'message' => "Produk {$nama_produk} tidak ditemukan di database.",
            ]);
        }
    }

    $user = Auth::user();
    if ($user->hasRole('admin')) {
        return redirect('/dashboard');
    } else {
        return redirect('/dashboard/karyawan');
    }
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
