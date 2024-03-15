<?php

namespace App\Http\Controllers\Admin;

use App\Models\Competence;
use App\Models\Realisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RealisationController extends Controller
{
    public function index(){
        return view('admin.realisation.index');
    }

    public function edit(Realisation $realisation) {
        $competences = Competence::all();
        return view('admin.realisation.edit', ['realisation'=> $realisation, 'competences' => $competences]);
    }

    public function update(Realisation $realisation, Request $request) {
       $request->validate([
            'titre' => 'required',
            'soustitre' => 'required',
            'uploads' => 'required',
            'description' => 'required'
        ]);

        $realisation->update($request->except('uploads'));
        
        dd($request->all());
    }

    public function add(Realisation $realisation)
    {
        return view('admin.realisation.index', compact('realisation'));
    }

    public function validateAdd(Realisation $realisation, Request $request) {
        $credentials = $request->validate([
            'titre' => 'required',
            'soustitre' =>'required',
            'uploads' => 'required',
            'description' => 'required'
        ]);

        $realisation->insert($credentials);

        return redirect()->route('realisationAdmin')->with('sucess', 'Réalisation ajouter avec succées')->withInput();
    }
}