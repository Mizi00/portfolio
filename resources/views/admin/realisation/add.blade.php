@extends('layouts.app')

@section('body')
<x-admin.navbar />

<div class="add-contain">
    <div class="add-title">
        <h1>Créer une réalisation</h1>
    </div>
    <div class="add-content">
        <h2>Création</h2>
        <div class="add-form">
            <form action="{{ route('validate') }}" method="post" enctype="multipart/form-data"> <!-- mettre entype="multipart/form-data" pour l'envoie de type file -->
                @csrf
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
                    <label for="">Competence</label>
                    <select name="competences[]" id="competence_select" multiple>
                        @foreach($competences as $competence)
                        <optgroup label="{{ $competence->nom }}">
                            @foreach($competence->souscompetences as $souscompetence)
                            <option value="{{ $souscompetence->id }}">{{ $souscompetence->nom }}</option>
                            @endforeach
                        </optgroup>
                        @endforeach
                    </select>
                </div>
                <div class="add-element">
                    <label for="">Text</label>
                    <div id="editor" style="height: 300px;"></div>
                    <input type="hidden" id="quill_html" name="description">
                </div>
                <div class="add-element-button">
                    <input type="submit" value="Créer">
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </form>
        </div>
    </div>
</div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tom-select/2.3.1/css/tom-select.min.css" integrity="sha512-fnaIKCc5zGOLlOvY3QDkgHHDiDdb4GyMqn99gIRfN6G6NrgPCvZ8tNLMCPYgfHM3i3WeAU6u4Taf8Cuo0Y0IyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.snow.min.css" integrity="sha512-/FHUK/LsH78K9XTqsR9hbzr21J8B8RwHR/r8Jv9fzry6NVAOVIGFKQCNINsbhK7a1xubVu2r5QZcz2T9cKpubw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.7/quill.min.js" integrity="sha512-P2W2rr8ikUPfa31PLBo5bcBQrsa+TNj8jiKadtaIrHQGMo6hQM6RdPjQYxlNguwHz8AwSQ28VkBK6kHBLgd/8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    const quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{
                    'font': []
                }, {
                    'size': []
                }],
                ['bold', 'italic', 'underline', 'strike'],
                [{
                    'color': []
                }, {
                    'background': []
                }],
                ['blockquote', 'code-block'],
                [{
                    'list': 'ordered'
                }, {
                    'list': 'bullet'
                }],
                ['direction', {
                    'align': []
                }],
                ['link', 'image', 'video'],
                ['clean']
            ]
        }
    });

    quill.getModule('toolbar').addHandler('image', () => {
        const url = prompt('Insérez l\'URL de l\'image:');
        if (url) {
            if (isValidImageUrl(url)) {
                const range = quill.getSelection();
                quill.insertEmbed(range.index, 'image', url);
            } else {
                alert('L\'URL spécifiée n\'est pas une image valide.');
            }
        }
    });

    function isValidImageUrl(url) {
        const imageExtensions = ['.jpg', '.jpeg', '.png', '.gif', '.webp'];
        const cleanUrl = url.split('?')[0];

        return imageExtensions.some(ext => cleanUrl.toLowerCase().endsWith(ext));
    }

    // Permet de récupérer le contenu de l'éditeur est "l'injecter" dans un input ce qui va permettre de récupérer le contenu dans notre méthode POST
    document.querySelector('form').onsubmit = function() {
        document.getElementById("quill_html").value = quill.root.innerHTML;
    };
</script>
@endsection