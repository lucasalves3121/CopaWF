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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', function () {
        return view('dashboard');
        })->name('dashboard');

});


Route::get('/index', function () {
    return view('index');
});
Route::get('/jogos', function () {
    return view('jogos');
});
Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/classfutmasc', function () {
    return view('classfutmasc');
});
Route::get('/loginadmin', function () {
    return view('loginadmin');
});
Route::get('/patrocinadores', function () {
    return view('patrocinadores');
});

require __DIR__.'/auth.php';
