<header class="header">
    <h1 class="logo"><a href="#">Portfolio</a></h1>
    <ul class="main-nav">
        <li><a href="#">Qui suis-je ?</a></li>
        <li><a href="#">Réalisations</a></li>
        <li><a href="#">Compétences</a></li>
        <li><a href="#">Contact</a></li>
        @auth
        <li><a href="{{ route('logout') }}" class="dc-button"><i class="fa-solid fa-right-from-bracket"></i></a></li>
        @endauth
    </ul>
    <div class="button-sidebar" id="button-sidebar"><a><i class="fa-solid fa-bars"></i></a></div>
</header>
<div class="header-space"></div>