<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){

         $etudiants = Etudiant::orderBy('nom','asc')->paginate(2);
         return view('etudiant.index',[
            'etudiants' => $etudiants
         ]);
    }

    public function ajouter_etudiant(){
        return view('etudiant.ajouter');
    }

    public function rediger_eval(){
        return view('etudiant.evaluation');
    }

        /**
    * Suppression
    * @param  int  $etudiant
     */
    public function delete(Etudiant $etudiant){
   
          $etudiant->delete();
          return redirect()->route('etudiant.index')->with('success', 'etudiant supprimé avec succès');
    }


    public function edit(Etudiant $etudiant){
        return view('etudiant.edit',compact('etudiant'));
    }

    public function update(Request $request, Etudiant $etudiant){
        $request->validate([
            'nom' =>'required|min:5|max:255',
            'prenom' =>'required|min:5|max:255',
            'Classe' =>'required|min:5|max:255',
        ]);
        $etudiant->update([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'classe' => $request->input('classe')
        ]);
        
        return redirect()->route('etudiant.index')->with('success', 'Etudiant modifié avec succès');
    }

}




