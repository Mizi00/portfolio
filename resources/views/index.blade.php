@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar/>

<!--SECTION HERO-->
<section class="hero">
  <div class="hero-inner">
    <h1>Portfolio</h1>
    <p>Toufik BOUKICHOU en BTS SIO</p>
  </div>
    <a href="#parcours-id">Voir plus</a>
</section>

<!--SECTION PARCOUR-->
<section class="parcours" id="parcours-id">
  <div class="parcours-title">
    <h1>Mon Parcours</h1>
  </div>
  <div class="parcours-timeline">
    <div class="parcours-timeline-contain left">
      <div class="content">
        <h2>Bac STMG</h2>
        <p>Lycée Wallon, obtenu en 2020</p>
      </div>
    </div>
    <div class="parcours-timeline-contain right">
      <div class="content">
        <h2>1er année BUT</h2>
        <p>IUT Villeneuve d'Ascq, 2021</p>
      </div>
    </div>
    <div class="parcours-timeline-contain left">
      <div class="content">
        <h2>BTS SIO</h2>
        <p>Lycée Gaston Berger, obtenu en 2024</p>
      </div>
    </div>
    <div class="parcours-timeline-contain right">
      <div class="content">
        <h2>Stage Informatique 2eme année</h2>
        <p>Réaliser chez ValHainaut Auto</p>
      </div>
    </div>
  </div>
</section>
<x-footer/>
@endsection