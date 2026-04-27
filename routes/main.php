<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
	return view('pertemuan5');
});

Route::get('/tugaspert5', function () {
	return view('tugaspertemuan5-linktree');
});
