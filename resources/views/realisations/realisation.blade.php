@extends('layouts.app')

@section('body')
<x-navbar />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.core.min.css" integrity="sha512-AqSNjpJ7R92d+ANZrrP/hSBerCkDCQE/EILn5MylysaRmbi0Jwi56r39McL3p7LJnO+bjthpFu8GQ2y/d0fECg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="show-realisation">
    <div class="show-realisation-hero" style="background: linear-gradient(rgba(0, 0, 0, 0.295), rgba(22, 22, 22, 0.822)), url('{{ asset('storage/uploads/'.$realisation->img) }}');">
        <div class="show-realisation-hero-content">
            <h1>{{ $realisation->titre }}</h1>
            <span>{{ $realisation->soustitre }}</span>
        </div>
    </div>
    <div class="show-realisation-content">
        <div class="show-realisation-content-title">
            <h1>Contenu de la realisation</h1>
        </div>
        <div class="show-realisation-content-text ql-editor">
            {!! $realisation->description !!}
        </div>
    </div>
</div>

<x-footer border="true" />
@endsection