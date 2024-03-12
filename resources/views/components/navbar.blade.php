<header class="header">
    <h1 class="logo"><a href="{{ route('home') }}">Portfolio</a></h1>
    <ul class="main-nav">
        @auth
        <li><a href="{{ route('homeAdmin') }}">tableau de bord</a></li>
        @endauth
        <li><a href="{{ route('home') }}#about-me-id">Qui suis-je ?</a></li>
        <li><a href="{{ route('realisation') }}">Réalisations</a></li>
        <li><a href="#">Compétences</a></li>
        <li><a href="{{ route('veille') }}">Veille</a></li>
        <li><a href="{{ route('home') }}#contact">Contact</a></li>
    </ul>
    <div class="button-sidebar" id="button-sidebar"><a><i class="fa-solid fa-bars"></i></a></div>
</header>
<div class="header-space"></div>