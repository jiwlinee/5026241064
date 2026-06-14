<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        // Mengambil seluruh record dari Tabel "nilaikuliah"
        $nilaikuliah = DB::table('nilaikuliah')->get();
        return view('nilaikuliah.index', compact('nilaikuliah'));
    }

    public function create()
    {
        // Menampilkan Halaman Tambah Data
        return view('nilaikuliah.create');
    }

    public function store(Request $request)
    {
        // Validasi input disesuaikan dengan tipe data pada soal
        $request->validate([
            'NRP'        => 'required|string|max:6',
            'NilaiAngka' => 'required|integer',
            'SKS'        => 'required|integer',
        ]);

        // Menyimpan data ke dalam tabel nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS,
        ]);

        // Setelah mengisikan record baru, langsung redirect ke Halaman Index
        return redirect()->route('nilaikuliah.index');
    }

    // Catatan: Walaupun rincian detail soal nomor 3 dan 4 hanya berfokus pada halaman Index dan Tambah Data,
    // karena instruksi nomor 1 meminta "Halaman Web CRUD", fungsi Edit dan Delete tetap disediakan di bawah ini:

    public function edit($id)
    {
        // Mencari data berdasarkan ID (Primary Key)
        $nilaikuliah = DB::table('nilaikuliah')->where('ID', $id)->first();

        if (!$nilaikuliah) {
            abort(404);
        }

        return view('nilaikuliah.edit', compact('nilaikuliah'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'NRP'        => 'required|string|max:6',
            'NilaiAngka' => 'required|integer',
            'SKS'        => 'required|integer',
        ]);

        DB::table('nilaikuliah')
            ->where('ID', $id)
            ->update([
                'NRP'        => $request->NRP,
                'NilaiAngka' => $request->NilaiAngka,
                'SKS'        => $request->SKS,
            ]);

        return redirect()->route('nilaikuliah.index');
    }

    public function destroy($id)
    {
        DB::table('nilaikuliah')->where('ID', $id)->delete();

        return redirect()->route('nilaikuliah.index');
    }
}
