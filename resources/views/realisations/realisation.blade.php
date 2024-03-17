@extends('layouts.app')

@section('body')

<div class="show-realisation">
    <div class="show-realisation-hero" style="background: linear-gradient(rgba(0, 0, 0, 0.295), rgba(22, 22, 22, 0.822)), url('{{ asset('storage/uploads/'.$realisation->img) }}');">
        <div class="show-realisation-hero-content">
            <h1>{{ $realisation->titre }}</h1>
            <span>{{ $realisation->soustitre }}</span>
        </div>
    </div>
    <div class="show-realisation-content">
        <h1>Contenu de la realisation</h1>
        <div class="show-realisation-content-text">
            {!! $realisation->description !!}
        </div>
    </div>
</div>
@endsection