@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />

<!--SECTION HERO-->
<section class="hero">
  <div class="hero-inner">
    <h1>Portfolio</h1>
    <p>Toufik BOUKICHOU en BTS SIO</p>
  </div>
  <a href="#about-me-id">Voir plus</a>
</section>

<!--SECTION QUI-SUIS JE-->
<section class="about-me" id="about-me-id">
  <div class="about-me-img">
    <img src="{{ asset('img/tk.webp') }}" alt="">
  </div>
  <div class="about-me-text">
    <h1>Qui suis-je ?</h1>
    <p>Je m'appelle Toufik Boukichou, j'ai 20 ans, <strong>étudiant</strong> en <strong>BTS Services Informatiques aux Organisations (SIO)</strong> résidant à <strong>Valenciennes</strong>. Mon parcours académique m'a ouvert les portes d'un univers qui me passionne profondément : l'informatique.
      Au fil de mon cursus, j'ai développé des compétences solides en développement, gestion de projets et maintenance des systèmes d'information. Mon intérêt pour la résolution de problèmes informatiques et la création de solutions novatrices a été le moteur de mon engagement dans ce domaine en constante évolution.
    </p>
    <div class="about-me-text-button">
      <a href="">Mon CV</a>
    </div>
    
  </div>
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
<x-footer />
@endsection