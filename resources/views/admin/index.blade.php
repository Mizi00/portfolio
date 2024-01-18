@extends('layouts.app') <!--extends sert a appeler le layout (le chemin vers le layout commence à partir de views utiliser des points à la place des slashs)-->

@section('body') <!-- injecte dans le yield body du layout-->
<x-navbar /><!--cet balise sert à injecter le composant blade (ici navbar qui doit être importer dans app.scss)-->
<x-sidebar/>
@for($i = 0; $i<=20; $i++)
    <p>gérard departdegato = {{ $i }}000 KG</p>
@endfor 

@endsection