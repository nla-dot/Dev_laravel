<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnseignantController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/etudiant',[EtudiantController::class,'index'])->name('etudiant.index');
Route::get('/ajouter',[EtudiantController::class,'ajouter_etudiant'])->name('etudiant.ajouter');
Route::get('/evaluation',[EnseignantController::class,'rediger_eval'])->name('etudiant.evaluation');
Route::delete('/etudiant/delete/{etudiant}',[EtudiantController::class,'delete'])->name('etudiant.delete');
Route::get('/etudiant/edit/{etudiant}',[EtudiantController::class,'edit'])->name('etudiant.edit');
Route::post('/etudiant/update/{etudiant}',[EtudiantController::class,'update'])->name('etudiant.update');
