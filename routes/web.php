<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
// jangan di replace file nya , copy paste kan perintahnya
use App\Http\Controllers\SiswaController;
// contoh soal EAS
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiKuliahController;
use App\Http\Controllers\LipstickController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <b>www.malasngoding.com</b>";
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/main', function () {
	return view('main');
});

Route::get('/pert1', function () {
	return view('pertemuan1-intro');
});

Route::get('/pert2.1', function () {
	return view('pertemuan2-news');
});

Route::get('/pert2.2', function () {
	return view('pertemuan2-news1');
});

Route::get('/pert3', function () {
	return view('pertemuan3-responsive');
});

Route::get('/tugaspert3', function () {
	return view('tugaspertemuan3-contoh');
});

Route::get('/pert4', function () {
	return view('pertemuan4-clients');
});

Route::get('/pert5', function () {
	return view('pertemuan5-arsha');
});

Route::get('/tugaspert5', function () {
	return view('tugaspertemuan5-linktree');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pengawai/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, "tentang"]);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai/', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route contoh soal EAS
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/tambah', [KeranjangBelanjaController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang/store', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/batal/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjang.destroy');

Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'create'])->name('nilaikuliah.create');
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');
Route::delete('/nilaikuliah/batal/{id}', [NilaiKuliahController::class, 'destroy'])->name('nilaikuliah.destroy');
Route::get('/nilaikuliah/edit/{id}', [NilaiKuliahController::class, 'edit'])->name('nilaikuliah.edit');

Route::get('/lipstick', [LipstickController::class, 'index'])->name('lipstick.index');
Route::get('/lipstick/tambah', [LipstickController::class, 'create'])->name('lipstick.create');
Route::post('/lipstick/store', [LipstickController::class, 'store'])->name('lipstick.store');
Route::get('/lipstick/edit/{kodelipstick}', [LipstickController::class, 'edit'])->name('lipstick.edit');
Route::put('/lipstick/update/{kodelipstick}', [LipstickController::class, 'update'])->name('lipstick.update');
Route::delete('/lipstick/delete/{kodelipstick}', [LipstickController::class, 'destroy'])->name('lipstick.destroy');
