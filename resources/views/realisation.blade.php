@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />
<div class="realisation-header">
  <h1>Réalisations</h1>
</div>
<div class="realisations-container">
  <div class="realisations-list">
    @foreach($realisations as $realisation)
    <div class="realisation">
      <div class="realisation-img"><img src="{{ asset('img/face.png') }}" alt=""></div>
      <div class="realisation-content">
        <h1 class="realisation-title">{{ Str::limit($realisation->titre, 40) }}</h1>
        <div class="realisation-desc">{{ Str::limit($realisation->description, 200) }}</div>
        <div class="realisation-button"><a href="">Voir plus</a></div>
      </div>
    </div>
    @endforeach
  </div>
</div>


<x-footer />
@endsection