@extends('layouts.app')

@section('body')
<x-navbar />
<x-sidebar />

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
        @if($realisation->recupCompetence->isNotEmpty())
        <div class="accordion-container">
            <h2>Compétences</h2>
            <div class="accordion">
                @foreach($competences as $competence)
                <div class="accordion-item">
                    <div class="accordion-header">      
                        <span>{{ $competence->nom }}</span>
                        <span class="accordion-toggle"><svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                <path d="M6 9l6 6 6-6"></path>
                            </svg></span>
                    </div>
                    <ul class="accordion-content">
                        @foreach($competence->souscompetences as $souscompetence)
                        @if($realisation->recupSousCompetence->contains($souscompetence))
                            <li>{{ $souscompetence->nom }}</li>
                        @endif
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>

<x-footer border="true" />

<script>
    const accordionItems = document.querySelectorAll('.accordion-item');
    accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header');
        const content = item.querySelector('.accordion-content');
        header.addEventListener('click', () => {
            if (!content.classList.contains('active')) {
                closeAllAccordions();
            }
            content.classList.toggle('active');
            const arrowIcon = header.querySelector('.accordion-toggle');
            arrowIcon.classList.toggle('rotate');
            if (content.classList.contains('active')) {
                content.style.height = content.scrollHeight + 'px';
            } else {
                content.style.height = '0';
            }
        });
    });

    function closeAllAccordions() {
        accordionItems.forEach(item => {
            const content = item.querySelector('.accordion-content');
            const arrowIcon = item.querySelector('.accordion-toggle');
            if (content.classList.contains('active')) {
                content.classList.remove('active');
                arrowIcon.classList.remove('rotate');
                content.style.height = '0';
            }
        });
    }
</script>
@endsection