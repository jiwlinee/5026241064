<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // 1. Halaman Index (Menampilkan Data)
    public function index()
    {
        // Mengambil semua data langsung dari tabel
        $keranjang = DB::table('keranjangbelanja')->get();
        return view('keranjang.index', compact('keranjang'));
    }

    // 2. Halaman Tambah Data (Form)
    public function create()
    {
        return view('keranjang.tambah');
    }

    // 3. Menyimpan Data Baru ke Database
    public function store(Request $request)
    {
        // Validasi inputan form
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah' => 'required|integer',
            'Harga' => 'required|integer',
        ]);

        // Insert data ke tabel menggunakan Query Builder
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        // Mengarahkan langsung (redirect) ke Halaman Index
        return redirect()->route('keranjang.index');
    }

    // 4. Fitur Hapus Data (Batal)
    public function destroy($id)
    {
        // Hapus data berdasarkan ID
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        return redirect()->route('keranjang.index');
    }
}
