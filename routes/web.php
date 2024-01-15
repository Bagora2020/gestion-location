<?php

use App\Http\Controllers\GreenVibesController;
use App\Models\SalleCafetaria;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/', function () {
     return view('layout.app');
});

route::get('/facture',[GreenVibesController::class, 'facture'])->name('greenvibes.facture');
route::get('/greenvibes',[GreenVibesController::class, 'create'])->name('greenvibes.create');
Route::post('/store', [GreenvibesController::class, 'store'])->name('greenvibes.add');


Route::get('/greenvibes/{id}/edit', [GreenVibesController::class, 'edit'])->name('greenvibes.edit');
Route::put('/greenvibes/{id}', [GreenVibesController::class, 'update'])->name('greenvibes.update');





