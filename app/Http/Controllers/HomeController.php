<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function getContact(Request $request) {
        $request->validate([
            'nom' => 'required',
            'tel' => 'required|max:10',
            'mail' => 'required|email',
            'objet' => 'required|max:50',
            'message' => 'required'
        ]);

        Mail::to('contact@tboukichou.fr')->send(new ContactMail($request->all()));
        dd('Message envoyer');
    }
}
