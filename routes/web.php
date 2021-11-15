<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;

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

Route::get('/articles',[FormationController::class,'index'])->name('formaList');
Route::get('/articles/ajouter',[FormationController::class,'add'])->name('formaAdd');
Route::post('/articles/ajouter',[FormationController::class,'store'])->name('formaStore');

Route::get('/articles/{id}',[FormationController::class,'details'])->name('formaDetails');
Route::put('/articles/{id}/modifier',[FormationController::class,'update'])->name('formaUpdate');
Route::put('/articles/{id}/modifier/image',[FormationController::class,'updatePicture'])->name('formaUpdatePicture');
Route::delete('/articles/{id}/supprimer',[FormationController::class,'delete'])->name('formaDelete');