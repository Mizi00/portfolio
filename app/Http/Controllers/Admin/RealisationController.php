<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competence;
use App\Models\Realisation;

class RealisationController extends Controller
{
    public function index(){
        return view('admin.realisation.index');
    }

    public function edit(Realisation $realisation) {
        $competences = Competence::all();
        return view('admin.realisation.edit', ['realisation'=> $realisation, 'competences' => $competences]);
    }
}