@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />
<div class="menu-competence-title">
    <h1>{{ $competence->nom }}</h1>
</div>
<div class="menu-competence-contain">
    <ul class="menu-competence-content">
        @foreach($souscompetences as $souscompetence)
        <a href=""><li>{{ $souscompetence->nom }}</li></a>
        @endforeach
    </ul>
</div>
<x-footer />
@endsection