@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar/>
<div class="container">
  <div class="contain-card">

  @for($i=0;$i<=11;$i++)
    <article class="card">
      <header>
        <h3 class="h3-title">TEST</h3>
      </header>
      <img src="laravel.jpg" alt="">
      <div class="content-card">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          Ipsum ipsa odit accusamus distinctio dolorem nesciunt facilis perferendis fuga at, sequi,</p>
      </div>
      <div class="button">
        <a href="#">Voir</a>
      </div>
    </article>
    @endfor
  </div>
</div>
<x-footer/>
@endsection