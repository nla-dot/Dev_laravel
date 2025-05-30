<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnseignantController extends Controller
{
   public function rediger_eval(){
    return view('etudiant.evaluation');
   }
}
