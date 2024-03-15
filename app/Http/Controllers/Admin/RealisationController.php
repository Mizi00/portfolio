<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Competence;
use App\Models\Realisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Laravel\Facades\Image;

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

    public function add()
    {
        $competences = Competence::all();
        return view('admin.realisation.add', compact('competences'));
    }

    public function validateAdd(Realisation $realisation, Request $request) {
        $credentials = $request->validate([
            'titre' => 'required',
            'soustitre' =>'required',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:5000'
        ]);

        if($request->hasFile('img')){
            $originalImage = $request->file('img');

            $fileName = md5(time() . $originalImage->getClientOriginalName());
            Image::read($originalImage)->toWebP(85)->save("storage/uploads/{$fileName}.webp");

            $imagePath = "{$fileName}.webp";
        }
        $credentials['img'] = $imagePath;

        $realisation->insert($credentials);

        return redirect()->route('realisationAdmin')->with('sucess', 'Réalisation ajouter avec succées');
    }
}