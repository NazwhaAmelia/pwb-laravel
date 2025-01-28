<?php

use App\Http\Controllers\GuestBookController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;

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
})->name('genre.create');




route::get('/satu', [GuestBookController::class,'satu']);
route::get('/dua', [GuestBookController::class,'dua']);


Route::controller(GenreController::class)->group(function(){
// Route::get('/genre')
Route::get('/genre/create', 'create')->name('genre.create');
Route::post('/movies', 'store')->name('genre.store');
//unutk menampilkan data genre
Route::get('/genre', 'indexx')->name('genre.indexx');
//menampilkan form edit
Route::get('/genre/{id}/edit', 'edit')->name('genre.edit');
//menampilkan proses data ke database
Route::put('/genre/{id}', 'update')->name('genre.update');
// delete data di table genre berdasarkan ID
Route::delete('/genre/{id}', 'delete')->name('genre.delete');
});

