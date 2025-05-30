<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EnseignantController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etudiant',[EtudiantController::class,'liste_etudiant']);
Route::get('/ajouter',[EtudiantController::class,'ajouter_etudiant']);
Route::get('/evaluation',[EnseignantController::class,'rediger_eval']);
Route::delete('/etudiant/delete/{etudiant}',[EtudiantController::class,'delete'])->name('etudiant.delete');
Route::get('/etudiant/edit/{etudiant}',[EtudiantController::class,'edit'])->name('etudiant.edit');
Route::post('/etudiant/update/{etudiant}',[EtudiantController::class,'update'])->name('etudiant.update');
