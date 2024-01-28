<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RealisationController extends Controller
{
    public function show(){
        return view('admin.realisation.index');
    }
}
