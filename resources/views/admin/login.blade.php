@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />

<div class="contain">
    <form action="" class="contain-log">
        <h2>Se Connecter</h2>
        <div class="contain-text">
            <input type="email" id="email" name="email" placeholder="Ex: joe@exemple.fr">
            <input type="password" id="psswd" name="psswd" placeholder="Entrez votre mot de passe">
        </div>
        <input type="button" id="button" value="Connexion">
    </form>
</div>
<x-footer :position="1"/>

@endsection