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

@if(session('success') || session('delete'))
@section('js')
<script>
    butterup.toast({
        title: ' {{ session('success') ? 'Succès ' : 'Supprimer' }}',
        message: '{{ session('success') ? session('success') : session('delete') }}',
        location: 'top-right',
        icon: true,
        dismissable: true,
        type: '{{ session('success') ? 'success' : 'error' }}'
    });
</script>
@endsection
@endif


@endsection