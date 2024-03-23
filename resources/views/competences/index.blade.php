@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />
<div class="menu-competence-title">
    <h1>Menu des compétences</h1>
</div>
<div class="menu-competence-contain">
    <ul class="menu-competence-content">
        @foreach ($competences as $competence)
            <a href="{{ route('competence', $competence->id) }}"><li>{{ $competence->nom }}</li></a>
        @endforeach
    </ul>
</div>
   
@endsection
