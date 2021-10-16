<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'frontendCOntroller@index')->name('frontend');
    
Route::prefix('artis')->group(function () {
    Route::get('/', 'artisController@index')->name('artis.index');
    Route::get('/create', 'artisController@create')->name('artis.create');
    Route::post('/', 'artisController@store')->name('artis.store');
    Route::get('/edit/{id}', 'artisController@edit')->name('artis.edit');
    Route::put('/{id}', 'artisController@update')->name('artis.update');
    Route::put('/delete', 'artisController@delete')->name('artis.delete');
    Route::delete('/{id}', 'artisController@destroy')->name('artis.destroy');
    Route::get('/show/{id}', 'artisController@show')->name('artis.show');
});
Route::prefix('film')->group(function () {
    Route::get('/', 'filmController@index')->name('film.index');
    Route::get('/create', 'filmController@create')->name('film.create');
    Route::post('/', 'filmController@store')->name('film.store');
    Route::get('/edit/{id}', 'filmController@edit')->name('film.edit');
    Route::put('/{id}', 'filmController@update')->name('film.update');
    Route::put('/delete', 'filmController@delete')->name('film.delete');
    Route::delete('/{id}', 'filmController@destroy')->name('film.destroy');
    Route::get('/show/{id}', 'filmController@show')->name('film.show');
});
Route::prefix('genre')->group(function () {
    Route::get('/', 'genreController@index')->name('genre.index');
    Route::get('/create', 'genreController@create')->name('genre.create');
    Route::post('/', 'genreController@store')->name('genre.store');
    Route::get('/edit/{id}', 'genreController@edit')->name('genre.edit');
    Route::put('/{id}', 'genreController@update')->name('genre.update');
    Route::put('/delete', 'genreController@delete')->name('genre.delete');
    Route::delete('/{id}', 'genreController@destroy')->name('genre.destroy');
    Route::get('/show/{id}', 'genreController@show')->name('genre.show');
});
Route::prefix('negara')->group(function () {
    Route::get('/', 'negaraController@index')->name('negara.index');
    Route::get('/create', 'negaraController@create')->name('negara.create');
    Route::post('/', 'negaraController@store')->name('negara.store');
    Route::get('/edit/{id}', 'negaraController@edit')->name('negara.edit');
    Route::put('/{id}', 'negaraController@update')->name('negara.update');
    Route::put('/delete', 'negaraController@delete')->name('negara.delete');
    Route::delete('/{id}', 'negaraController@destroy')->name('negara.destroy');
    Route::get('/show/{id}', 'negaraController@show')->name('negara.show');
});
Route::prefix('produser')->group(function () {
    Route::get('/', 'produserController@index')->name('produser.index');
    Route::get('/create', 'produserController@create')->name('produser.create');
    Route::post('/', 'produserController@store')->name('produser.store');
    Route::get('/edit/{id}', 'produserController@edit')->name('produser.edit');
    Route::put('/{id}', 'produserController@update')->name('produser.update');
    Route::put('/delete', 'produserController@delete')->name('produser.delete');
    Route::delete('/{id}', 'produserController@destroy')->name('produser.destroy');
    Route::get('/show/{id}', 'produserController@show')->name('produser.show');
});

