<?php

namespace App\Http\Controllers;

use App\Models\SousCompetence;
use Illuminate\Http\Request;

class SousCompetenceController extends Controller
{
    public function show(SousCompetence $souscompetence)
    {
        $realisations = $souscompetence->recupRealisation()->get();
        return view('competences.realisations', compact('realisations', 'souscompetence'));
    }
}
