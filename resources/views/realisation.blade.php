@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />
<div class="card-title">
  <h1>Réalisation</h1>
</div>

<div class="contain-card">

@forelse($realisations as $realisation)
<article class="card">
    <div class="card-img">
      <img src="{{ asset('img/img.jpg') }}" alt="">
    </div>
    <div class="content-card">
      <h1>{{ $realisation->titre }}</h1>
      <p>{{ $realisation->description }}</p>
      <a href="#">
        <div class="button">Voir plus</div>
      </a>
    </div>
    </article>
    @empty
    <p>Pas de réalisation pour l'instant ...</p>
    @endforelse
</div>

<x-footer />
@endsection