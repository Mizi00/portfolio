@extends('layouts.app')

@section('body')
    <x-navbar />
    <x-sidebar />
    <div class="veille">
        <div class="veille-title">
            <h1>Veille technologique</h1>
            <p>Retrouvez ici tous les articles</p>
        </div>
        <div class="veille-img">
            <h2>L'IA au côtés des développeurs</h2>
        </div>
        <div class="veille-text">
            <h4><b>L'IA et le développement : une collaboration prometteuse</b></h4>
            <p>L'intelligence artificielle (IA) révolutionne le monde du développement d'applications en apportant une
                multitude d'outils et de techniques pour automatiser, optimiser et améliorer les processus de création.</p>
            <h4>Un duo gagnant : développeurs et IA</h4>
            <p>Imaginez un développeur, concentré sur son écran, codant une nouvelle application. A ses côtés, un assistant
                IA transparent, analysant son code et lui suggérant des optimisations. En arrière-plan, les lignes de code
                se transforment en une machinerie complexe, symbolisant la puissance de l'IA. Cette image illustre la
                collaboration croissante entre l'intelligence humaine et l'intelligence artificielle dans le domaine du
                développement logiciel.</p>
            <h4>L'IA : un atout pour les développeurs</h4>
            <p>L'IA offre aux développeurs de nombreux avantages :</p>
            <ul>
                <li><b>Automatisation des tâches répétitives</b> : tests, corrections de bugs, génération de code... L'IA se
                    charge
                    des tâches fastidieuses, permettant aux développeurs de se concentrer sur des aspects plus créatifs et
                    stratégiques.</li>
                <li><b>Applications plus performantes et prédictives</b> : L'IA analyse les données et optimise les
                    performances
                    des applications. Elle peut également anticiper les besoins des utilisateurs et adapter l'application en
                    conséquence.</li>
                <li><b>Expérience utilisateur optimale</b> : L'IA permet d'intégrer des fonctionnalités intelligentes comme
                    la
                    recherche prédictive, les recommandations personnalisées et les interfaces conversationnelles.</li>
                <li><b>Développement accéléré</b> : L'IA automatise la création de prototypes et de MVP, ce qui permet de
                    lancer
                    des applications plus rapidement sur le marché.</li>
            </ul>
            <h4><b>Exemples concrets d'outils d'IA</b></h4>
            <ul>
                <li><b>GitHub Copilot</b> : un assistant de codage qui propose des suggestions de code et des corrections
                    d'erreurs
                    en temps réel.</li>
                <li><b>Amazon SageMaker</b> : une plateforme de développement d'applications d'IA qui offre des outils pour
                    créer,
                    entraîner et déployer des modèles d'apprentissage automatique.</li>
                <li><b>Google AI Platform</b> : une suite d'outils d'IA pour le développement d'applications web et mobiles.
                </li>
            </ul>
            <h4><b>L'IA : un avenir prometteur pour le développement d'applications</b></h4>
            <p>La collaboration entre les développeurs et l'IA est un atout majeur pour l'avenir du développement
                d'applications. En combinant l'intelligence humaine et la puissance de l'IA, nous pouvons créer des
                applications plus performantes, plus intuitives et plus adaptables aux besoins des utilisateurs.</p>
        </div>

        <h1 class="title-article">Articles</h1>
        @for ($i = 1; $i <= 11; $i++)
            <div class="veille-container">
                <div class="veille-content">
                    <div class="veille-content-img">
                        <a href=""><img src="{{ asset('img/image.png') }}" alt=""></a>
                    </div>
                    <div class="veille-content-element">
                        <span>12/12/2023</span>
                        <h2><a href="">Article n°{{ $i }}</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, a odit velit enim ad
                            beatae.</p>
                        <div class="veille-content-element-button">
                            <a href="">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        @endfor


    </div>


    <x-footer />
@endsection
