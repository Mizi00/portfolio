<?php

namespace App\Http\Controllers\Admin;

use App\Models\Competence;
use App\Models\Realisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SousCompetence;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class RealisationController extends Controller
{
    public function index()
    {
        return view('admin.realisation.index');
    }

    public function edit(Realisation $realisation)
    {
        $competences = Competence::all();
        $sousCompetences = $realisation->recupSousCompetence->pluck('id')->toArray();
        return view('admin.realisation.edit', ['realisation' => $realisation, 'competences' => $competences, 'sousCompetences' => $sousCompetences]);
    }

    public function update(Realisation $realisation, Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'soustitre' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg,webp|max:5000',
            'description' => 'required'
        ]);

        if($request->has('competences')) {
            $realisation->recupSousCompetence()->detach();
            $realisation->recupCompetence()->detach();
            $competences = SousCompetence::whereIn('id', $request->input('competences'))->distinct()->pluck('idCompetence'); //recupere en bdd les competence des souscompetences selection dans le formulaire d'édition
            $realisation->recupCompetence()->attach($competences);
            $realisation->recupSousCompetence()->attach($request->input('competences'));
        }

        $realisation->update($request->except('uploads'));

        if ($request->hasFile('img')) {
            if ($realisation->img) {
                Storage::disk('public')->delete('uploads/'.$realisation->img);
            }
            $originalImage = $request->file('img');

            $fileName = md5(time() . $originalImage->getClientOriginalName());
            Image::read($originalImage)->toWebP(85)->save("storage/uploads/{$fileName}.webp");
         
            $realisation->img = "{$fileName}.webp";
            $realisation->save();
        }            

        return redirect()->route('realisationAdmin')->with('success', 'Réalisation modifiée avec succès !');
    }

    public function add()
    {
        $competences = Competence::all();
        return view('admin.realisation.add', compact('competences'));
    }

    public function validateAdd(Realisation $realisation, Request $request)
    {
        $credentials = $request->validate([
            'titre' => 'required',
            'soustitre' => 'required',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,webp|max:5000'
        ]);

        if ($request->hasFile('img')) {
            $originalImage = $request->file('img');

            $fileName = md5(time() . $originalImage->getClientOriginalName());
            Image::read($originalImage)->toWebP(85)->save("storage/uploads/{$fileName}.webp");

            $imagePath = "{$fileName}.webp";
        }        

        $realisation = Realisation::create([
            'titre' => $credentials['titre'],
            'soustitre' => $credentials['soustitre'],
            'description' => $credentials['description'],
            'img' => $imagePath  
        ]);

        if($request->has('competences')) {
            $sousCompetences = $request->input('competences');

            $competencesIds = SousCompetence::whereIn('id', $sousCompetences)->distinct()->pluck('idCompetence');
            $realisation->recupCompetence()->attach($competencesIds);
            $realisation->recupSousCompetence()->attach($sousCompetences);
        }

        return redirect()->route('realisationAdmin')->with('success', 'Réalisation ajoutée avec succées')->withInput();
    }

    public function delete(Realisation $realisation)
    {   
        if($realisation->img) {
            Storage::disk('public')->delete('uploads/'.$realisation->img);
        }
        $realisation->delete();
        return redirect()->route('realisationAdmin')->with('delete', 'Annonce supprimé !');
    }
}
