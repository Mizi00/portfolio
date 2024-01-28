<div class="navbar">
    <div class="navbar-container">
        <div class="navbar-logo">
            <a href="#"><span>Admin Dashbord</span></a>
        </div>
        <div class="header-menu">
            <ul class="nav-menu">
                <li><a class="{{ Route::is('homeAdmin') ? 'menu-link-active' : '' }}" href="{{ route('home') }}"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a class="{{ Route::is('home') ? 'menu-link-active' : '' }}"  href="{{ route('realisation') }}"><i class="fa-solid fa-house"></i>Realisation</a></li>
                <li><a class="{{ Route::is('realisation') ? 'menu-link-active' : '' }}" href="#"><i class="fa-solid fa-house"></i>Home</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <span>{{ auth()->user()->name }}</span> <!--- auth() => recupère la facade (facade def => classe qui permettent d'accéder à d'autre classe plus facilement) user() méthode pour accèder au model user actuelement connecter-->
            @auth
            <a href="{{ route('logout') }}" class="dc-button"><i class="fa-solid fa-right-from-bracket"></i></a>
            @endauth
        </div>
    </div>
</div>