<?php

use Illuminate\Support\Facades\Route;

// GET, POST, PUT, DELETE, PATCH

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', function() {
    return view('calculator.index');
});

Route::post('/calculator', function() {
    return view('calculator.hasil');
});


Route::get('/biodata', function() {
    return view('biodata.index');
});


Route::post('/biodata', function() {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $angkatan = $_POST['angkatan'];
    $tahun_terakhir = 2025;
    $semester_terakhir = 'Ganjil';
    $tahun_angkatan = (int) $angkatan;
    $semester = (($tahun_terakhir - $tahun_angkatan) * 2) + 1;
    return view('biodata.hasil', compact('nama', 'nim', 'jenis_kelamin', 'angkatan', 'semester') );
});
