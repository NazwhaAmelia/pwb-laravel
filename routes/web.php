<?php

use App\Http\Controllers\GuestBookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
Use App\Http\Controllers\CastController;

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

Route::get('/formGenre', function () {
    return view('formGenre');
});

Route::get('/formCast', function () {
    return view('formCast');
});




route::get('/satu', [GuestBookController::class,'satu']);
route::get('/dua', [GuestBookController::class,'dua']);


Route::controller(GenreController::class)->group(function(){
Route::get('/formGenre', 'create')->name('genre.create');
Route::post('/genre', 'store')->name('genre.store');
Route::get('/genre', 'indexx')->name('genre.indexx');
Route::get('/genre/{id}/edit', 'edit')->name('genre.edit');
Route::put('/genre/{id}', 'update')->name('genre.update');
Route::delete('/genre/{id}', 'delete')->name('genre.delete');
});

Route::controller(CastController::class)->group(function(){
    Route::get('/formCast', 'create')->name('cast.create');
    Route::post('/cast', 'store')->name('cast.store');
    // untuk menampilkan data cast
    Route::get('/cast', 'index')->name('cast.index');
    // menampilkan form edit
    Route::get('/cast/{id}/edit', 'edit')->name('cast.edit');
    // menampilkan proses data ke database
    Route::put('/cast/{id}', 'update')->name('cast.update');
    // delete data di table cast berdasarkan ID
    Route::delete('/cast/{id}', 'delete')->name('cast.delete');
});



