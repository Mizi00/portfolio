@extends('layouts.app')

@section('body')
<x-admin.navbar />

<div class="realisation-admin">
    <div class="realisation-admin-title">
        <h1>Mes Réalisation</h1>
        <span>Ici, le tableau récapitulatif des réalisations</span>
    </div>
    <div class="table-div">
        @livewire('realisation')
    </div>
</div>

@endsection