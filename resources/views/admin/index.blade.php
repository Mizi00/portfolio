@extends('layouts.app') <!--extends sert a appeler le layout (le chemin vers le layout commence à partir de views utiliser des points à la place des slashs)-->

@section('body')
<x-navbar /><!--cet balise sert à injecter le composant blade (ici navbar qui doit être importer dans app.scss)-->
<x-sidebar/>
<div class="container">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
        </tbody>
    </table>
</div>

@for($i = 0; $i<=20; $i++)
    <p>gérard departdegato = {{ $i }}000 KG</p>
@endfor 

@endsection