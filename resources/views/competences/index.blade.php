@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />

<div class="menu-competence-contain">
    <ul class="menu-competence-content">
        @foreach ($competences as $competence)
            <a href=""><li>{{ $competence->nom }}</li></a>
        @endforeach
    </ul>
</div>

<x-footer />   
@endsection
