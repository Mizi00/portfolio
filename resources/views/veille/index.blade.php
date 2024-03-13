@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />
<div class="veille">
    <div class="veille-title">
        <h1>Veille technologique</h1>
        <p>Retrouvez ici tous les articles
        <p>
    </div>
    <!--NE PAS OUBLIER PARAGRAPHE POUR LA VEILLE-->

    @for($i=1; $i<=11; $i++) 
    <div class="veille-container">
        <div class="veille-content">
            <div class="veille-content-img">
                <img src="https://media.tenor.com/TnpzEhvcjdAAAAAM/jen-ai-vu-des-chose.gif" alt="">
            </div>
            <div class="veille-content-element">
                <span>12/12/2023</span>
                <h2>Article n°{{ $i }}</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, a odit velit enim ad beatae.</p>
                <div class="veille-content-element-button">
                    <a href="">Voir plus</a>
                </div>
            </div>
        </div>
    </div>

@endfor


</div>


<x-footer />
@endsection