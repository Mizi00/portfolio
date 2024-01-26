@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />

<div class="contain log-space">
    <form action="{{ route('login') }}" method="POST" class="contain-log">
        @csrf
        <h2>Se Connecter</h2>
        <div class="contain-text">
            <input type="email" id="email" name="email" placeholder="Ex: joe@exemple.fr" value="{{ old('email') }}">  <!--récupère l'input (avant d'appuyer sur connexion)-->
            <input type="password" id="psswd" name="password" placeholder="Entrez votre mot de passe">
            @foreach($errors->all() as $error)
                <div class="error">{{ $error }}</div>
            @endforeach
        </div>
        <input type="submit" id="button" value="Connexion">
    </form>
</div>
<x-footer :position="1" />

@endsection