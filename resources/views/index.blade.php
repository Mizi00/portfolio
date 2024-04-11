@extends('layouts.app')

@section('body')
    <x-navbar />
    <x-sidebar />

    <!--SECTION HERO-->
    <section class="hero">
        <div class="hero-inner">
            <h1>Portfolio</h1>
            <p>Toufik BOUKICHOU en BTS SIO</p>
        </div>
        <a href="#about-me-id">Voir plus</a>
    </section>

    <!--SECTION QUI-SUIS JE-->
    <section class="about-me" id="about-me-id">
        <div class="about-me-img">
            <img src="{{ asset('img/face.png') }}" alt="">
        </div>
        <div class="about-me-text">
            <h1>Qui suis-je ?</h1>
            <p>Je m'appelle Toufik Boukichou, j'ai 20 ans, <strong>étudiant</strong> en <strong>BTS Services Informatiques
                    aux Organisations (SIO)</strong> résidant à <strong>Valenciennes</strong>. Mon parcours académique m'a
                ouvert les portes d'un univers qui me passionne profondément : l'informatique.
                Au fil de mon cursus, j'ai développé des compétences solides en développement, gestion de projets et
                maintenance des systèmes d'information. Mon intérêt pour la résolution de problèmes informatiques et la
                création de solutions novatrices a été le moteur de mon engagement dans ce domaine en constante évolution.
            </p>
            <div class="about-me-text-button">
                <a href="https://uploads.portfolio.tboukichou.fr/pdfs/6617c2d33acea.pdf" target="_blank">Mon CV</a>
            </div>

        </div>
    </section>

    <!--SECTION PARCOUR-->
    <section class="parcours" id="parcours-id">
        <div class="parcours-title">
            <h1>Mon Parcours</h1>
        </div>
        <div class="parcours-timeline">
            <div class="parcours-timeline-contain left">
                <div class="content">
                    <span>2022 - 2024</span>
                    <h2>Brevet de Technicien Supérieur (BTS) SIO</h2>
                    <span>Formation au BTS SIO au Lycée Gaston Berger à Lille, option SLAM.</span>
                </div>
            </div>
            <div class="parcours-timeline-contain right">
                <div class="content">
                    <span>2023 - 2024</span>
                    <h2>Stage chez Val Hainaut Auto</h2>
                    <span>Durée de 1 mois date de début: 15 janvier au 23 février</span>
                </div>
            </div>
            <div class="parcours-timeline-contain left">
                <div class="content">
                    <span>2022 - 2023</span>
                    <h2>Stage chez Val Hainaut Auto</h2>
                    <span>Durée de 1 mois date de début: 15 mai au 23 juin</span>
                </div>
            </div>
            <div class="parcours-timeline-contain right">
                <div class="content">
                    <span>2021 - 2022</span>
                    <h2>1er Année BUT Informatique</h2>
                    <span>IUT Villeneuve d'Ascq</span>
                </div>
            </div>
            <div class="parcours-timeline-contain left">
                <div class="content">
                    <span>2020 - 2021</span>
                    <h2>Baccalauréat STMG (Sciences et Technologies du Management et de la Gestion)</h2>
                    <p>Lycée Henri Wallon, Valenciennes</p>
                </div>
            </div>
        </div>
    </section>

    <!--SECTION CONTACT-->
    <section class="contact" id="contact">
        <div class="contact-container">
            <div class="contact-about-me">
                <h1>Me Contactez</h1>
                <ul>
                    <li><b>Tel:</b> <a href="">06.10.40.49.23</a></li>
                    <li><b>Mail:</b> <a href="">toufikboukichou2@gmail.com</a></li>
                </ul>
            </div>
            <script src="https://www.google.com/recaptcha/api.js"></script>
            <script>
                function onSubmit(token) {
                    document.getElementById("contactForm").submit();
                }
            </script>
            <div class="contact-form">
                <form action="{{ route('home') }}" method="post">
                    @csrf
                    <div class="form-element">
                        <label for="">Nom:</label>
                        <input type="text" class="@error('nom') is-invalid @enderror" name="nom" autocomplete="off"
                            required placeholder="Ex: Doe">
                        @error('nom')
                            <div class="form-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-element">
                        <label for="">Mail:</label>
                        <input type="email" class="@error('mail') is-invalid @enderror" autocomplete="off" name="mail"
                            placeholder="Ex: johndoe@exemple.com">
                        @error('mail')
                            <div class="form-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-element">
                        <label for="">Téléphone:</label>
                        <input type="tel" name="tel" class="@error('tel') is-invalid @enderror" autocomplete="off"
                            pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required placeholder="Ex:0612345678">
                        @error('tel')
                            <div class="form-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-element">
                        <label for="">Objet:</label>
                        <input type="text" name="objet" class="@error('objet') is-invalid @enderror" autocomplete="off"
                            maxlength="70" required placeholder="John Doe exemple">
                        @error('objet')
                            <div class="form-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-element">
                        <label for="">Message:</label>
                        <textarea name="message" id="" cols="50" class="@error('message') is-invalid @enderror" rows="10"
                            required placeholder="Votre message ..."></textarea>
                        @error('message')
                            <div class="form-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-element-button">
                        <input type="submit" value="Envoyer" data-sitekey="{{ config('services.recaptcha_v3.siteKey') }}"
                            data-callback="onSubmit" data-action="submitContact">
                    </div>
                    @if (session('success'))
                        <div class="form-success">{!! session('success') !!}</div>
                    @endif

                </form>
            </div>
        </div>
    </section>
    <x-footer />
@endsection
