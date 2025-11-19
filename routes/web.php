<?php

use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Route;

Route::resource('pasien', PasienController::class);
