@extends('layouts.app')

@section('body')
    <div class="contain-log">
        @if (session('error'))
            <div class="form-errors">{{ session('error') }}</div>
        @endif
        <div class="log">
            <div class="log-title">
                <h1>Connectez-vous</h1>
            </div>
            <script src="https://www.google.com/recaptcha/api.js"></script>
            <script>
                function onSubmit(token) {
                    document.getElementById("contactForm").submit();
                }
            </script>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-element">
                    <label for="">Nom d'utilisateur</label>
                    <input type="text" class="@error('message') is-invalid @enderror" name="name"
                        value="{{ old('nom') }}" placeholder="Ex: john5599">
                </div>
                <div class="form-element">
                    <label for="">Mot de passe</label>
                    <input type="password" class="@error('message') is-invalid @enderror" name="password"
                        placeholder="Secret...">
                </div>
                <div class="form-element-button">
                    <input type="submit" value="Se connecter" data-sitekey="{{ config('services.recaptcha_v3.siteKey') }}" data-callback="onSubmit" data-action="submitContact">
                </div>
            </form>
        </div>
    </div>
@endsection
