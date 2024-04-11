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
        <div class="slide-outils">
            <h1>Mes outils de veille technologique</h1>    
        </div>
        <section class="splide" aria-label="Basic Structure Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide"><img src="https://www.tactee.fr/wp-content/uploads/2014/08/logo-google-alerts.png" alt=""></li>
                        <li class="splide__slide"><img src="{{ asset('img/googlealert.png') }}" alt=""></li>
                        <li class="splide__slide"><img src="{{ asset('img/capture.png') }}" alt=""></li>
                        <li class="splide__slide"><img src="https://www.egatereferencement.com/wp-content/uploads/2017/04/google-actualites.png" alt=""></li>
                    </ul>
                </div>
            </section>


        <div class="container-veille">
            <h1 class="title-article">Articles</h1>
            <div class="veille-container">
                <div class="veille-content">
                    <div class="veille-content-img">
                        <a href="" target="_blank"><img
                                src="https://pic.clubic.com/v1/images/2116332/raw.webp?fit=max&width=1200&hash=e78873a2aba147eff5c887130b3c9ac1c71e3029"
                                alt=""></a>
                    </div>
                    <div class="veille-content-element">
                        <span>11 juin 2023</span>
                        <h2><a href="https://www.clubic.com/chatgpt/actualite-472665-on-a-demande-a-chatgpt-de-faire-une-application-mobile.html"
                                target="_blank">On a demandé à ChatGPT de faire une application mobile</a></h2>
                        <p>Est-ce que vous savez coder ? Que la réponse soit oui ou non, impossible de passer à côté de
                            ChatGPT dans le domaine du développement informatique. Si vous n'êtes...</p>
                        <div class="veille-content-element-button">
                            <a href="" target="_blank">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="veille-container">
                <div class="veille-content">
                    <div class="veille-content-img">
                        <a href="https://intelligence-artificielle.developpez.com/actu/346118/-Dans-5-ans-il-n-y-aura-plus-de-programmeurs-humains-predit-le-PDG-de-Stability-AI-qui-ravive-le-debat-sur-la-possible-prise-de-pouvoir-de-l-IA-dans-la-filiere-du-developpement-informatique/"
                            target="_blank"><img
                                src="https://f.hellowork.com/helloworkplace/2021/11/intelligence-artificielle-et-travail-1200x675.jpg"
                                alt=""></a>
                    </div>
                    <div class="veille-content-element">
                        <span>04 juil. 2023</span>
                        <h2><a href="https://intelligence-artificielle.developpez.com/actu/346118/-Dans-5-ans-il-n-y-aura-plus-de-programmeurs-humains-predit-le-PDG-de-Stability-AI-qui-ravive-le-debat-sur-la-possible-prise-de-pouvoir-de-l-IA-dans-la-filiere-du-developpement-informatique/"
                                target="_blank">« Dans 5 ans, il n'y aura plus de programmeurs humains »</a></h2>
                        <p>Le CEO de GitHub a déclaré lors d’un récent entretien que ce n’est qu’une question de temps avant
                            que l’intelligence artificielle Copilot n’écrive 80 % du code informatique...</p>
                        <div class="veille-content-element-button">
                            <a href="https://intelligence-artificielle.developpez.com/actu/346118/-Dans-5-ans-il-n-y-aura-plus-de-programmeurs-humains-predit-le-PDG-de-Stability-AI-qui-ravive-le-debat-sur-la-possible-prise-de-pouvoir-de-l-IA-dans-la-filiere-du-developpement-informatique/"
                                target="_blank">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="veille-container">
                <div class="veille-content">
                    <div class="veille-content-img">
                        <a href="https://intelligence-artificielle.developpez.com/actu/345674/92-pourcent-des-developpeurs-utiliseraient-des-outils-d-intelligence-artificielle-selon-une-enquete-de-GitHub-aupres-des-developpeurs/"
                            target="_blank"><img
                                src="https://pic.clubic.com/v1/images/1927773/raw?fit=max&width=1200&hash=c48181c2c22873aad46ba1231d940baa838a3e63"
                                alt=""></a>
                    </div>
                    <div class="veille-content-element">
                        <span>20 juin 2023</span>
                        <h2><a href="https://intelligence-artificielle.developpez.com/actu/345674/92-pourcent-des-developpeurs-utiliseraient-des-outils-d-intelligence-artificielle-selon-une-enquete-de-GitHub-aupres-des-developpeurs/"
                                target="_blank">92 % des développeurs utiliseraient des outils d'intelligence
                                artificielle</a></h2>
                        <p>Une enquête menée par la plateforme de collaboration entre développeurs GitHub a révélé que 92 %
                            des programmeurs utilisent déjà l'intelligence artificielle...</p>
                        <div class="veille-content-element-button">
                            <a href="https://intelligence-artificielle.developpez.com/actu/345674/92-pourcent-des-developpeurs-utiliseraient-des-outils-d-intelligence-artificielle-selon-une-enquete-de-GitHub-aupres-des-developpeurs/"
                                target="_blank">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="veille-container">
                <div class="veille-content">
                    <div class="veille-content-img">
                        <a href="https://www.journaldunet.com/intelligence-artificielle/1522869-ia-generative-allons-nous-vraiment-vers-la-fin-des-developpeurs/"
                            target="_blank"><img
                                src="https://www.challenges.fr/assets/img/2023/04/27/cover-r4x3w1200-644a6459bab9e-33356-1932203-k2-k1-4465691-jpg.jpg"
                                alt=""></a>
                    </div>
                    <div class="veille-content-element">
                        <span>06 juin 2023</span>
                        <h2><a href="https://www.journaldunet.com/intelligence-artificielle/1522869-ia-generative-allons-nous-vraiment-vers-la-fin-des-developpeurs/"
                                target="_blank">IA générative : allons-nous vraiment vers la fin des développeurs ?</a></h2>
                        <p>Le domaine du développement informatique n’échappe pas aux remous générés par la récente...</p>
                        <div class="veille-content-element-button">
                            <a href="https://www.journaldunet.com/intelligence-artificielle/1522869-ia-generative-allons-nous-vraiment-vers-la-fin-des-developpeurs/"
                                target="_blank">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="veille-container">
                <div class="veille-content">
                    <div class="veille-content-img">
                        <a href="https://www.cnil.fr/fr/liso-27701-une-norme-internationale-pour-la-protection-des-donnees-personnelles"
                            target="_blank"><img
                                src="https://www.cnil.fr/sites/cnil/files/styles/contenu_generique_visuel/public/thumbnails/image/normalisation-iso.jpg?itok=bNA7FOQs"
                                alt=""></a>
                    </div>
                    <div class="veille-content-element">
                        <span>02 avr. 2023</span>
                        <h2><a href="https://www.cnil.fr/fr/liso-27701-une-norme-internationale-pour-la-protection-des-donnees-personnelles"
                                target="_blank">Données personnelles et IA : l’apport des normes ISO/IEC 27701 et 42001</a>
                        </h2>
                        <p>La norme internationale ISO/IEC 27701 décrit la gouvernance et les mesures de sécurité à mettre
                            en place pour les traitements de données...</p>
                        <div class="veille-content-element-button">
                            <a href="https://www.cnil.fr/fr/liso-27701-une-norme-internationale-pour-la-protection-des-donnees-personnelles"
                                target="_blank">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="veille-container">
                <div class="veille-content">
                    <div class="veille-content-img">
                        <a href="https://www.lebigdata.fr/chatgpt-metiers-grand-remplacement" target="_blank"><img
                                src="https://www.lebigdata.fr/wp-content/uploads/2023/02/chatgpt-travail-metiers-remplacement-660x330.png"
                                alt=""></a>
                    </div>
                    <div class="veille-content-element">
                        <span>02 fevr. 2024</span>
                        <h2><a href="https://www.lebigdata.fr/chatgpt-metiers-grand-remplacement" target="_blank">ChatGPT :
                                voici les métiers les plus menacés d’un grand remplacement par l’IA</a></h2>
                        <p>L'intelligence artificielle ChatGPT est déjà utilisée par de nombreux professionnels, afin
                            d'automatiser le travail au quotidien...</p>
                        <div class="veille-content-element-button">
                            <a href="https://www.lebigdata.fr/chatgpt-metiers-grand-remplacement" target="_blank">Voir
                                plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="veille-container">
                <div class="veille-content">
                    <div class="veille-content-img">
                        <a href="https://www.tomsguide.fr/le-pdg-de-nvidia-predit-que-lia-va-mettre-tous-les-programmeurs-au-chomage/"
                            target="_blank"><img
                                src="https://www.tomsguide.fr/content/uploads/sites/2/2024/02/IA-intelligence-artificielle-Nvidia-PDG-programmation.jpg"
                                alt=""></a>
                    </div>
                    <div class="veille-content-element">
                        <span>28 fevr. 2024</span>
                        <h2><a href="https://www.tomsguide.fr/le-pdg-de-nvidia-predit-que-lia-va-mettre-tous-les-programmeurs-au-chomage/"
                                target="_blank">Le PDG de Nvidia prédit que l’IA va mettre tous les programmeurs au
                                chômage</a></h2>
                        <p>Le PDG de Nvidia, Jensen Huang, estime que la programmation sera bientôt une compétence du passé.
                            Pour le fabricant de cartes graphiques...</p>
                        <div class="veille-content-element-button">
                            <a href="https://www.tomsguide.fr/le-pdg-de-nvidia-predit-que-lia-va-mettre-tous-les-programmeurs-au-chomage/"
                                target="_blank">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="veille-container">
                <div class="veille-content">
                    <div class="veille-content-img">
                        <a href="https://www.zdnet.fr/actualites/pdg-de-nvidia-le-codage-n-est-pas-une-competence-necessaire-meme-pour-l-ia-39964570.htm"
                            target="_blank"><img
                                src="https://www.zdnet.fr/wp-content/uploads/zdnet/2024/03/75363db0a7b9c45da600947708aea612-2.jpg"
                                alt=""></a>
                    </div>
                    <div class="veille-content-element">
                        <span>28 fevr. 2024</span>
                        <h2><a href="https://www.zdnet.fr/actualites/pdg-de-nvidia-le-codage-n-est-pas-une-competence-necessaire-meme-pour-l-ia-39964570.htm"
                                target="_blank">PDG de Nvidia:« Le codage n’est pas une compétence nécessaire… même pour
                                l’IA »</a></h2>
                        <p>Le PDG de Nvidia, Jensen Huang, affirme que la programmation n’est plus une compétence nécessaire
                            en informatique grâce à l’arrivée de l’intelligence artificielle (IA)...</p>
                        <div class="veille-content-element-button">
                            <a href="https://www.zdnet.fr/actualites/pdg-de-nvidia-le-codage-n-est-pas-une-competence-necessaire-meme-pour-l-ia-39964570.htm"
                                target="_blank">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="veille-container">
                <div class="veille-content">
                    <div class="veille-content-img">
                        <a href="https://www.silicon.fr/github-ia-developpeurs-469667.html" target="_blank"><img
                                src="https://www.silicon.fr/wp-content/uploads/2019/11/d%C3%A9veloppeur-code-%C3%A9cran-logiciel-684x513.png"
                                alt=""></a>
                    </div>
                    <div class="veille-content-element">
                        <span>10 juill. 2023</span>
                        <h2><a href="https://www.silicon.fr/github-ia-developpeurs-469667.html" target="_blank">GitHub:
                                l’IA ne va pas remplacer les développeurs</a></h2>
                        <p>Quel impact aura l’intelligence artificielle générative sur la productivité des développeurs et
                            l’économie ? GitHub a son idée...</p>
                        <div class="veille-content-element-button">
                            <a href="https://www.silicon.fr/github-ia-developpeurs-469667.html" target="_blank">Voir
                                plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="veille-container">
                <div class="veille-content">
                    <div class="veille-content-img">
                        <a href="https://www.itforbusiness.fr/gains-de-productivite-des-developpeurs-avec-l-ia-generative-jusquou-68694"
                            target="_blank"><img
                                src="https://www.itforbusiness.fr/wp-content/uploads/2023/11/DallE-and-Firefly-1024x408.jpg"
                                alt=""></a>
                    </div>
                    <div class="veille-content-element">
                        <span>06 nov. 2023</span>
                        <h2><a href="https://www.itforbusiness.fr/gains-de-productivite-des-developpeurs-avec-l-ia-generative-jusquou-68694"
                                target="_blank">Gains de productivité des développeurs avec l’IA générative : jusqu’où
                                ?</a></h2>
                        <p>En générant du code, en le complétant ou en l’optimisant, l’IA générative réduit les temps de
                            développement et la dette technique...</p>
                        <div class="veille-content-element-button">
                            <a href="https://www.itforbusiness.fr/gains-de-productivite-des-developpeurs-avec-l-ia-generative-jusquou-68694"
                                target="_blank">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <x-footer />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/splidejs/4.1.4/js/splide.min.js"
        integrity="sha512-4TcjHXQMLM7Y6eqfiasrsnRCc8D/unDeY1UGKGgfwyLUCTsHYMxF7/UHayjItKQKIoP6TTQ6AMamb9w2GMAvNg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var splide = new Splide('.splide', {
            type: 'loop',
            padding: '5rem',
        });

        splide.mount();
    </script>
@endsection
