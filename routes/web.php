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
