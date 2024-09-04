@extends('layouts.app')

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                    title: 'À la recherche d\'une alternance pour la rentrée 2024',
                    text: 'Suite à mon admission à l\'école MyDigitalSchool à Lille pour un Bachelor en Développement Web, je suis à la recherche d\'une alternance d\'un an avec un rythme de 2 semaines en entreprise et 1 semaine en cours. Passionné par le digital et déterminé à mettre en pratique mes compétences, je suis prêt à m\'investir pleinement dans de nouveaux défis. Si vous êtes intéressé par mon profil, n\'hésitez pas à me contacter !',
                    confirmButtonText: 'Mon CV',
                    showCloseButton: true,
                    customClass: {
                        confirmButton: "button-pop"
                    }

                })
                .then((result) => {
                    if (result.isConfirmed) {
                        window.open('https://uploads.portfolio.tboukichou.fr/pdfs/66d892a15d068.pdf', '_blank')
                    }
                });
        });
    </script>
@endsection
@section('body')
    <x-navbar />
    <x-sidebar />

    <!--SECTION HERO-->
    <section class="hero">
        <div class="hero-inner">
            <h1>Portfolio</h1>
            <p>Toufik BOUKICHOU</p>
        </div>
        <a href="#about-me-id">Voir plus</a>
    </section>

    <!--SECTION QUI-SUIS JE-->
    <section class="about-me" id="about-me-id">
        <div class="about-me-img">
            <img src="{{ asset('img/bureau.jpg') }}" alt="">
        </div>
        <div class="about-me-text">
            <h1>Qui suis-je ?</h1>
            <p> Bonjour, je m'appelle Toufik Boukichou. J'ai 20 ans et je réside à Valenciennes. Actuellement, je suis
                inscrit en <b>Bachelor Développement Web à MyDigitalSchool à Lille pour la rentrée 2024</b>. Je suis à la
                recherche
                d'une <b>alternance de 12 mois</b> sur le Valenciennois et la région Lilloise afin de mettre
                en
                pratique mes compétences et d'acquérir une expérience professionnelle enrichissante.</p>

            <p>Je suis une personne motivée et réceptive, toujours prête à apprendre et à relever de nouveaux défis. Mes
                compétences en développement web incluent la maîtrise de <b>HTML/CSS, JavaScript, PHP, SQL et Java</b>.
                J'ai
                également de l'expérience avec des frameworks tels que <b>Laravel</b>.
            </p>
            <div class="about-me-text-button">
                <a href="https://uploads.portfolio.tboukichou.fr/pdfs/66d892a15d068.pdf" target="_blank">Mon CV</a>
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
                <h1>Me Contacter</h1>
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
