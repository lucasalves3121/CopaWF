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

    Route::get('/admin', function () {
        return view('admin/admin');
        })->name('admin');
        Route::get('/cadmodal', function () {
            return view('admin/cadmodal');
            })->name('cadmodal');
            Route::get('/grupfutmasc', function () {
                return view('admin/grupfutmasc');
                })->name('grupfutmasc');    
                Route::get('/grupfutfem', function () {
                    return view('admin/grupfutfem');
                    })->name('grupfutfem');    
                    Route::get('/resultfutmasc', function () {
                        return view('admin/resultfutmasc');
                        })->name('resultfutmasc');  
    
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
Route::get('/patrocinadores', function () {
    return view('patrocinadores');
});

require __DIR__.'/auth.php';
