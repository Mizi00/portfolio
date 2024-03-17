<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index() {
        
        $realisations = Realisation::latest()->get();
        return view('realisations.index', compact('realisations'));
    }

    public function show(Realisation $realisation)
    {
        return view('realisations.realisation', compact('realisation'));
    }
}
