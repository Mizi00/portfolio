<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }

    public function getContact(Request $request) {
        $validator = Validator::make($request->all(),
        [
            'nom' => 'required',
            'tel' => 'required|max:10',
            'mail' => 'required|email',
            'objet' => 'required|max:50',
            'message' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->route('home', ['#contact'])->withErrors($validator);
        }

        Mail::to('contact@tboukichou.fr')->send(new ContactMail($request->all()));
        return redirect()->route('home', ['#contact'])->with('success', 'Message envoyé, merci de votre temps. <br>Je ferai en sorte de répondre au plus vite !');
    }
}
