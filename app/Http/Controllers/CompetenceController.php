<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\Request;

class CompetenceController extends Controller
{
    public function index() {
        $competences = Competence::all();
        return view('competences.index', compact('competences'));
    }

    public function show(Competence $competence) {
        $souscompetences = $competence->souscompetences()->get();
        return view('competences.souscompetence', compact('souscompetences', 'competence'));
    }
}
