@extends('layouts.app') <!--extends sert a appeler le layout (le chemin vers le layout commence à partir de views utiliser des points à la place des slashs)-->

@section('body') <!-- injecte dans le yield body du layout-->
<x-admin.navbar /><!--cet balise sert à injecter le composant blade (ici navbar qui doit être importer dans app.scss)-->
<x-sidebar/>

<div class="text">
    <h1>TEST</h1>
    @for($i=0;$i<=10; $i++)
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur dicta voluptatibus delectus hic rem debitis vero voluptates consequatur sunt corrupti commodi nulla facilis distinctio, fuga aliquam quidem fugiat ipsam id?</p>
    @endfor
</div>
@endsection