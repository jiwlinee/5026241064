<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LipstickController extends Controller
{
    public function index()
    {
        $lipstick = DB::table('lipstick')->orderBy('kodelipstick')->get();
        return view('lipstick.index', compact('lipstick'));
    }

    public function create()
    {
        return view('lipstick.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merklipstick'  => 'required|string|max:30',
            'stocklipstick' => 'required|integer|min:0',
            'tersedia' => 'required|in:Y,N',
        ]);

        DB::table('lipstick')->insert([
            'merklipstick'  => $request->merklipstick,
            'stocklipstick' => $request->stocklipstick,
            'tersedia' => $request->tersedia,
        ]);

        return redirect()->route('lipstick.index')->with('success', 'Data lipstick berhasil ditambahkan.');
    }

    public function edit($kodelipstick)
    {
        $lipstick = DB::table('lipstick')->where('kodelipstick', $kodelipstick)->first();

        if (!$lipstick) {
            abort(404);
        }

        return view('lipstick.edit', compact('lipstick'));
    }

    public function update(Request $request, $kodelipstick)
    {
        $request->validate([
            'merklipstick'  => 'required|string|max:30',
            'stocklipstick' => 'required|integer|min:0',
            'tersedia' => 'required|in:Y,N',
        ]);

        DB::table('lipstick')
            ->where('kodelipstick', $kodelipstick)
            ->update([
                'merklipstick'  => $request->merklipstick,
                'stocklipstick' => $request->stocklipstick,
                'tersedia' => $request->tersedia,
            ]);

        return redirect()->route('lipstick.index')->with('success', 'Data lipstick berhasil diubah.');
    }

    public function destroy($kodelipstick)
    {
        DB::table('lipstick')->where('kodelipstick', $kodelipstick)->delete();

        return redirect()->route('lipstick.index')->with('success', 'Data lipstick berhasil dihapus.');
    }
}
