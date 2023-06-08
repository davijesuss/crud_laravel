<?php

use App\Http\Controllers\FilmesController;
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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::prefix('filmes')->group(function(){
    Route::get('/', [FilmesController::class, 'index'])->name('filmes-index');
    Route::get('/create', [FilmesController::class, 'create'])->name('filmes-create');
    Route::post('/', [FilmesController::class, 'store'])->name('filmes-store');
    Route::get('/{id}/edit', [FilmesController::class, 'edit'])->where('id','[0-9]+')->name('filmes-edit');
    Route::put('/{id}', [FilmesController::class, 'update'])->where('id','[0-9]+')->name('filmes-update');
    Route::delete('/{id}', [FilmesController::class, 'destroy'])->where('id','[0-9]+')->name('filmes-destroy');



});




//Route::fallback(function(){
    return "Erro!";
//});