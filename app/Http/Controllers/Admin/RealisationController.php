<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class RealisationController extends Controller
{
    public function index(){
        return view('admin.realisation.index');
    }
}