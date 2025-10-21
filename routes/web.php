<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/profile', function () {
    $nama='Nadila Rizkika';
    return view('profile', compact('nama'));
    // return view('profile)->with('nama',$nama);
});

Route::get('array', function(){
    $nilai_awal = 1;
    while ($nilai_awal <= 100){
        echo'Hello Laravel' . $nilai_awal . 'x <br>';
        $nilai_awal++;
    }
});
