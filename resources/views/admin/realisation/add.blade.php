@extends('layouts.app')

@section('body')
<div class="add-contain">
    <div class="add-title">
        <h1>Créer une réalisation</h1>
    </div>
    <div class="add-content">
        <h2>Création</h2>
        <div class="add-form">
            <form action="">
                <div class="add-element">
                    <label for="">Titre</label>
                    <input type="text" name="titre">
                </div>
                <div class="add-element">
                    <label for="">Sous-titre</label>
                    <input type="text" name="soustitre">
                </div>
                <div class="add-element">
                    <label for="">Uploads</label>
                    <input type="file" name="img">
                </div>
                <div class="add-element">
                    <label for="">Text</label>
                </div>
                <div class="add-element-button">
                    <input type="submit" value="Créer">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection