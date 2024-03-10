@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />
<div class="contain-card">

  @for($i=0;$i<=10;$i++) <article class="card">
    <img src="{{ asset('img/bureau2.jpg') }}" alt="">
    <div class="content-card">
      <h1>TEST</h1>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        Ipsum ipsa odit accusamus distinctio dolorem nesciunt facilis perferendis fuga at, sequi,</p>
    </div>
    <a href="#">
      <div class="button">Voir plus</div>
    </a>
    </article>
    @endfor
</div>

<x-footer />
@endsection