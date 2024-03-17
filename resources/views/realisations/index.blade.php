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
      <div class="realisation-img"><a href="{{ route('showRealisation', $realisation->id) }}"><img src="{{ asset('storage/uploads/'.$realisation->img) }}" alt="" lazy="loading"></a></div>
      <div class="realisation-content">
        <h1 class="realisation-title"><a href="{{ route('showRealisation', $realisation->id) }}">{{ Str::limit($realisation->titre, 40) }}</a></h1>
        <span class="realisation-soustitre">{{ $realisation->soustitre  }}</span>
        <div class="realisation-desc">{{ Str::limit(strip_tags($realisation->description), 200) }}</div>
        <div class="realisation-button"><a href="{{ route('showRealisation', $realisation->id) }}">Voir plus</a></div>
      </div>
    </div>
    @endforeach
  </div>
</div>


<x-footer />
@endsection