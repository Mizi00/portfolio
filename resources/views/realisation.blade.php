@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />
<div class="card-title">
  <h1>Réalisation</h1>
</div>

<div class="contain-card">

  @for($i=0;$i<=10;$i++) <article class="card">
    <div class="card-img">
      <img src="{{ asset('img/img.jpg') }}" alt="">
    </div>
    <div class="content-card">
      <h1>TEST</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Ipsum ipsa odit accusamus distinctio dolorem nesciunt facilis perferendis fuga at, sequi,</p>
      <a href="#">
        <div class="button">Voir plus</div>
      </a>
    </div>
    </article>
    @endfor
</div>

<x-footer />
@endsection