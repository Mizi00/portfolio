@extends('layouts.app')

@section('body')
<x-navbar/>
<x-sidebar/>
<div class="veille">
    <div class="veille-title">
        <h1>Veille technologique</h1>
        <p>Retrouvez ici tous les articles<p>
    </div>
    <!--NE PAS OUBLIER PARAGRAPHE POUR LA VEILLE-->

    @for($i=0; $i<10; $i++)
    <div class="veille-content">
        <div class="veille-content-img">
            <img src="{{ asset('img/img.jpg') }}" alt="">
        </div>
        <div class="veille-content-element">
            <span>12/12/2023</span>
            <h2>Article n°1</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, a odit velit enim ad beatae.</p>
            <div class="veille-content-element-button">
                <a href="">Voir Plus</a>
            </div>
        </div>
    </div>
    @endfor


</div>


<x-footer/>
@endsection