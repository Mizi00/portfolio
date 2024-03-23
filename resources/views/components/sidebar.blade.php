<div class="sidebar" id="sidebar">
    <div id="cross-button"><i class="fa-solid fa-xmark cross"></i></div>
    <ul class="main-nav" id="main-nav">
        @auth
        <li><a href="{{ route('homeAdmin') }}">tableau de bord</a></li>
        @endauth
        <li><a href="{{ route('home') }}#about-me-id">Qui suis-je ?</a></li>
        <li><a href="{{ route('realisation') }}">Réalisations</a></li>
        <li><a href="">Compétence</a></li>
        <li><a href="{{ route('veille') }}">Veille</a></li>
        <li><a href="{{ route('home') }}#contact">Contact</a></li>
    </ul>
</div>
<div class="mask" id="mask"></div> <!--div qui va servir à faire un effet sombre à coté de la sidebar-->