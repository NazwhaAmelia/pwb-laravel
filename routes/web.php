<?php

use App\Http\Controllers\GuestBookController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/laravel', function () {
    return view('tampilan');
});

Route::get('tem/master', function () {
    return view('template/master');
});

Route::get('/movies', function () {
    return view('movies');
});



route::get('/satu', [GuestBookController::class,'satu']);
route::get('/dua', [GuestBookController::class,'dua']);



