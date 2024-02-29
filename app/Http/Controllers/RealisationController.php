<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function index(){
        return view('admin.realisation.index');
    }

    public function show(Realisation $realisation) {
        return view('admin.realisation.index', compact('realisation'));
    }
}
