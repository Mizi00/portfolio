<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index() {
        
        $realisations = Realisation::latest()->get();
        return view('realisation', compact('realisations'));
    }
}
