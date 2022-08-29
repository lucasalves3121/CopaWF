<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\ModalityController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\TeamController;
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

    Route::get('/cadmodal', [TeamController::class, 'index'])->name('cadmodal');
    Route::get('/time/find/{team}', [TeamController::class, 'find'])->name('teams.find');
    Route::put('/time/edit/{team}', [TeamController::class, 'update'])->name('teams.update');
    Route::delete('/time/delete/{team}', [TeamController::class, 'delete'])->name('teams.delete');
    Route::post('/time/novo', [TeamController::class, 'store'])->name('team.store');
    Route::post('/jogador/vincular', [TeamController::class, 'tapPlayer'])->name('team.tap-player');

    Route::get('/grupos/{modalityId}', [ModalityController::class, 'groups'])->name('modality.groups');
    Route::get('/resultados/{modalityId}', [ModalityController::class, 'results'])->name('modality.results');
    Route::get('/sorteios/{modalityId}', [ModalityController::class, 'sortitions'])->name('modality.sortitions');
    Route::post('/grupo/sortear', [GroupController::class, 'draw'])->name('groups.draw');

    Route::get('/cadjog', [PlayerController::class, 'index'])->name('cadjog');

    Route::prefix('jogador')->group(function (){
        Route::post('/novo', [PlayerController::class, 'store'])->name('player.store');
        Route::get('/buscar/{player}', [PlayerController::class, 'find'])->name('player.find');
        Route::put('/editar/{player}', [PlayerController::class, 'update'])->name('player.update');
        Route::delete('/deletar/{player}', [PlayerController::class, 'destroy'])->name('player.delete');
    });


    Route::get('/editjogo', function () {
        return view('admin/editjogo');
    })->name('editjogo');




    Route::get('configuracoes', [SettingsController::class, 'index'])->name('settings');
});


Route::get('/index', function () {
    return view('index');
});
Route::get('/jogosmascga', function () {
    return view('jogosmascga');
});
Route::get('/jogosmascgb', function () {
    return view('jogosmascgb');
});
Route::get('/jogosfem', function () {
    return view('jogosfem');
});
Route::get('/sobre', function () {
    return view('sobre');
});
Route::get('/classfutmasc', function () {
    return view('classfutmasc');
});
Route::get('/classfutfem', function () {
    return view('classfutfem');
});
Route::get('/patrocinadores', function () {
    return view('patrocinadores');
});

require __DIR__.'/auth.php';
