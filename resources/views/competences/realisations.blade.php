@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />

<div class="menu-competence-title">
    <h1>{{ $souscompetence->nom }}</h1>
</div>
<div class="menu-competence-contain">
    <ul class="menu-competence-content">
        @foreach ($realisations as $realisation)
            <a href="{{ route('showRealisation', $realisation->id) }}"><li>{{ $realisation->titre }}</li></a>
        @endforeach
    </ul>
</div>
@endsection