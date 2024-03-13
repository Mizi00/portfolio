<?php

namespace App\Http\Controllers\Admin;

use App\Models\Realisation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RealisationController extends Controller
{
    public function index() {
        
        $realisations = Realisation::latest()->get();
        return view('realisation', compact('realisations'));
    }
}
