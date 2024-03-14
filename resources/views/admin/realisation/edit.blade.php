@extends('layouts.app')

@section('body')
<x-admin.navbar />
<div class="realisation-edit-contain">
    <div class="realisation-edit-title">
        <h1>Réalisation n°{{ $realisation->id }}</h1>
        <p>{{ $realisation->titre }}</p>
    </div>
    <div class="realisation-edit-content">
        <h2>Édition</h2>
        <div class="realisation-edit-form">
            <form action="">
                <div class="realisation-edit-element">
                    <label for="">Titre</label>
                    <input type="text">
                </div>
                <div class="realisation-edit-element">
                    <label for="">Sous-titre</label>
                    <input type="text">
                </div>
                <div class="realisation-edit-element">
                    <label for="">Uploads</label>
                    <input type="file">
                </div>
                <div class="realisation-edit-element">
                    <select name="" id="competence_select" multiple>
                        @foreach($competences as $competence)
                        <option value="{{ $competence->id }}">{{ $competence->nom }}</option>
                        @endforeach
                    </select>
                </div>

            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/js/tom-select.complete.js" integrity="sha512-96+GeOCMUo6K6W5zoFwGYN9dfyvJNorkKL4cv+hFVmLYx/JZS5vIxOk77GqiK0qYxnzBB+4LbWRVgu5XcIihAQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    new TomSelect('#competence_select', {
        plugins: {
            'checkbox_options': {
                'checkedClassNames': ['ts-checked'],
                'uncheckedClassNames': ['ts-unchecked'],
            }
        },
    });
</script>
@endsection