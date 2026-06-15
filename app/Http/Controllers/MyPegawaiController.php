<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyPegawaiController extends Controller
{
    public function index()
    {
        $mypegawai = DB::table('mypegawai')->orderBy('kodepegawai')->get();
        return view('mypegawai.index', compact('mypegawai'));
    }

    public function create()
    {
        return view('mypegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|string|max:9',
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'nullable|string|max:5',
            'departemen' => 'nullable|string|max:10',
        ]);

        DB::table('mypegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect()->route('mypegawai.index')->with('success', 'Data Pegawai berhasil ditambahkan.');
    }

    public function view($kodepegawai)
{
    // Mengambil data pegawai berdasarkan kodepegawai dari database
    $mypegawai = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->first();

    // Jika data tidak ditemukan, tampilkan halaman error 404
    if (!$mypegawai) {
        abort(404);
    }

    // Mengembalikan ke tampilan view.blade.php yang ada di folder mypegawai
    return view('mypegawai.view', compact('mypegawai'));
}


    public function update(Request $request, $kodepegawai)
    {
        $request->validate([
            'kodepegawai' => 'required|string|max:9',
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'nullable|string|max:5',
            'departemen' => 'nullable|string|max:10',
        ]);

        DB::table('mypegawai')
            ->where('kodepegawai', $kodepegawai)
            ->update([
                'kodepegawai' => $request->kodepegawai,
                'namalengkap' => $request->namalengkap,
                'divisi' => $request->divisi,
                'departemen' => $request->departemen,
            ]);

        return redirect()->route('mypegawai.index')->with('success', 'Data Pegawai berhasil diubah.');
    }

    public function destroy($kodepegawai)
    {
        DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->delete();

        return redirect()->route('mypegawai.index')->with('success', 'Data Pegawai berhasil dihapus.');
    }
}
