@extends('base')

@section('assets')
    @vite('resources/scss/home/index.scss')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
@endsection

@section('title', 'Développeur web freelance')

@section('content')

    <section id="hero" class="grid items-end">
        <div id="triangle" class="grid items-end px-8 md:grid-cols-2 md:gap-4 md:justify-items-center">
            <div class="flex md:block md:place-self-center">
                <div class="">
                    <p class="pb-4 text-3xl font-bold tracking-widest">POULY Rémi</p>
                    <h1 class="text-gray-800 md:text-gray-600 text-3xl font-bold underline leading-[1.5em] tracking-widest">
                        Développeur web freelance
                    </h1>
                    <p class="text-white text-lg font-bold tracking-widest">Backend / Frontend</p>
                </div>
                <div class="flex flex-col space-y-8 md:flex-row md:space-y-0 md:gap-8 md:mt-12">
                    <a href="mailto:contact@remipouly.fr"
                       title="Email"
                    >
                        <img src="{{ Vite::asset('resources/images/icone-email.svg') }}"
                             alt="Icone adresse email developpeur freelance"
                             class="hover:scale-125"
                             width="38" height="36"
                        >
                    </a>
                    <a href="https://github.com/rorschach59"
                       target="_blank"
                       title="Github"
                    >
                        <img src="{{ Vite::asset('resources/images/icone-github.svg') }}"
                             alt="Icone Github developpeur freelance"
                             class="hover:scale-125"
                             width="38" height="36"
                        >
                    </a>
                    <a href="https://www.linkedin.com/in/r%C3%A9mi-pouly-83b53a142/"
                       target="_blank"
                       title="LinkedIn"
                    >
                        <img src="{{ Vite::asset('resources/images/icone-linkedin.svg') }}"
                             alt="Icone LinkedIn developpeur freelance"
                             class="hover:scale-125"
                             width="38" height="36"
                        >
                    </a>
                </div>
            </div>
            <div class="hidden md:block">
                <img src="{{ Vite::asset('resources/images/image 17.png') }}"
                     alt="Photo de POULY Rémi - Developpeur freelance"
                     width="400" height=""
                >
            </div>
        </div>
    </section>

    <section id="presentation" class="px-4 py-12 md:pl-10">
        <div class="text-white md:w-2/3">
            <h2 class="uppercase font-bold text-2xl leading-[3em]">Développeur web</h2>
            <p class="leading-[2em]">
                Bonjour, je suis Rémi, développeur web passionné avec plus d'une décennie d'expérience dans le domaine.
                <br>
                Je transforme vos visions en réalités digitales grâce à ma maîtrise du PHP, HTML, CSS ou encore
                Javascript.
                <br>
                Du site vitrine au site e-commerce, en passant par la création d'API, je m'adapte à vos besoins.
            </p>
        </div>
    </section>

    <section id="about" class="px-4 mt-16 md:px-0">
        <h2 class="bordered-title">A propos</h2>
        <p class="text-center mt-12">
            Découvrez moi, développeur web dévoué spécialisé dans la création de solutions digitales sur-mesure
        </p>
        <img src="{{ Vite::asset('resources/images/separateur.svg') }}"
             alt="Séparateur de contenu"
             class="mx-auto my-12"
             width="172" height="12"
        >
        <div class="md:w-2/3 md:mx-auto md:grid md:grid-cols-2 md:gap-24">
            <div>
                <div class="about-cards">
                    <img src="{{ Vite::asset('resources/images/icone-developpement-backend.png') }}"
                         alt="Icone de développement frontend"
                         width="40" height="40"
                    >
                    <h3 class="uppercase font-bold">Développement backend</h3>
                </div>
                <p class="mb-12">
                    En tant que développeur web indépendant, je maîtrise les langages PHP et MySQL, ainsi que les
                    frameworks Symfony et Laravel.
                    <br>
                    De la gestion de vos bases de données à la création d'APIs, chaque projet sera conçu avec le plus
                    grand soin.
                </p>
            </div>
            <div>
                <div class="about-cards">
                    <img src="{{ Vite::asset('resources/images/icone-developpement-frontend.png') }}"
                         alt="Icone de développement frontend"
                         width="40" height="40"
                    >
                    <h3 class="uppercase font-bold">Développement frontend</h3>
                </div>
                <p class="mb-12">
                    Je peux designer votre site internet de A à Z selon vos besoins et vos suggestions.
                    <br>
                    Avec ma maîtrise en HTML, CSS3, JavaScript, je crée des sites élégants, responsives et intuitifs.
                </p>
            </div>
        </div>

        <div class="md:w-1/3 md:mx-auto">
            <div class="about-cards">
                <img src="{{ Vite::asset('resources/images/icone-developpement-site-internet.png') }}"
                     alt="Icone de développement frontend"
                     width="40" height="40"
                >
                <h3 class="uppercase font-bold">Création de site internet</h3>
            </div>
            <p>
                En tant que développeur freelance, je peux prendre en charge votre projet de création de site web de A à
                Z.
                <br>
                Que vous souhaitiez un site vitrine, un blog ou un site e-commerce, je suis disponible pour concrétiser
                votre vision.
                <br>
                Je m'assure également que votre site soit optimisé et s'adapte à tous les écrans pour une expérience
                utilisateur de qualité.
            </p>
        </div>

        <img src="{{ Vite::asset('resources/images/separateur.svg') }}"
             alt="Séparateur de contenu"
             class="mx-auto my-12 md:my-24"
             width="172" height="12"
        >

        <h2 id="skills" class="bordered-title">Compétences</h2>

        <div class="md:mt-24 md:w-4/6 md:mx-auto"
             data-aos="fade-down"
             data-aos-offset="200"
             data-aos-delay="50"
             data-aos-duration="1000"
        >
            <h3 class="font-bold tracking-widest my-12 text-lg">Maitrise :</h3>

            <div class="grid grid-cols-2 gap-12 justify-items-center place-items-center md:grid-cols-4">
                @foreach($skillsImages['maitrise'] as $images)
                    <div>
                        <img src="{{ Vite::asset('resources/images/' . $images['filename']) }}"
                             alt="Logo technologies maitrisées - {{ $images['filename'] }}"
                             class="mb-2 mx-auto"
                             width="50" height="50"
                        >
                        <p class="italic text-center text-sm font-bold">{{ $images['techno'] }}</p>
                    </div>
                @endforeach
            </div>

            <h3 class="font-bold tracking-widest my-12 text-lg">Apprentissage :</h3>

            <div class="grid grid-cols-2 gap-12 justify-items-center place-items-center md:grid-cols-4">
                @foreach($skillsImages['apprentissage'] as $images)
                    <div>
                        <img src="{{ Vite::asset('resources/images/' . $images['filename']) }}"
                             alt="Logo technologies maitrisées - {{ $images['filename'] }}"
                             class="mb-2 mx-auto"
                             width="50" height="50"
                        >
                        <p class="italic text-center text-sm font-bold">{{ $images['techno'] }}</p>
                    </div>
                @endforeach
            </div>

            <h3 class="font-bold tracking-widest my-12 text-lg">Autres :</h3>

            <div class="grid grid-cols-2 gap-12 justify-items-center place-items-center md:grid-cols-4">
                @foreach($skillsImages['autres'] as $images)
                    <div>
                        <img src="{{ Vite::asset('resources/images/' . $images['filename']) }}"
                             alt="Logo technologies maitrisées - {{ $images['filename'] }}"
                             class="mb-2 mx-auto"
                             width="50" height="50"
                        >
                        <p class="italic text-center text-sm font-bold">{{ $images['techno'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="portfolio" class="md:mt-32">
        <div id="header" class="mt-24 py-12">
            <h2 class="bordered-title">Portfolio</h2>
        </div>


        <p class="text-center my-24">
            Découvrez mes réalisations précédentes en parcourant mon portfolio.
        </p>
        <img src="{{ Vite::asset('resources/images/separateur.svg') }}"
             alt="Séparateur de contenu"
             class="mx-auto my-12"
             width="172" height="12"
        >

        <div class="md:mt-12 md:grid md:grid-cols-3 md:gap-12 md:w-4/6 md:mx-auto"
             data-aos="fade-up-right"
             data-aos-offset="200"
             data-aos-delay="50"
             data-aos-duration="1000"
        >
            <div class="portfolio-card">
                <img src="{{ Vite::asset('resources/images/creation-site-internet-lafringale.png') }}"
                     alt="Création du site internet pour la friterie La Fringale"
                     class="mx-auto"
                     width="288" height="216"
                >
                <p class="italic text-center text-sm font-bold">
                    <a href="https://thefringale.fr" target="_blank" class="external-link">
                        Création du site internet pour la friterie La Fringale
                    </a>
                </p>
            </div>
            <div class="portfolio-card bg-gray-200/90 md:bg-transparent">
                <img src="{{ Vite::asset('resources/images/creation-site-internet-institutamana.png') }}"
                     alt="Création du site internet pour l'Institut Amana"
                     class="mx-auto"
                     width="288" height="216"
                >
                <p class="italic text-center text-sm font-bold">
                    <a href="https://institut-amana.fr" target="_blank" class="external-link">
                        Création du site internet pour l'Institut Amana
                    </a>
                </p>
            </div>
            <div class="portfolio-card">
                <img src="{{ Vite::asset('resources/images/creation-site-internet-jfcaluminium.png') }}"
                     alt="Création du site internet pour l'entreprise JFC Aluminium"
                     class="mx-auto"
                     width="288" height="216"
                >
                <p class="italic text-center text-sm font-bold">
                    <a href="https://jfc-alu.fr" target="_blank" class="external-link">
                        Création du site internet pour l'entreprise JFC Aluminium
                    </a>
                </p>
            </div>
            <div class="portfolio-card bg-gray-200/90 md:bg-transparent">
                <img src="{{ Vite::asset('resources/images/creation-site-internet-licoformation.png') }}"
                     alt="Création du site internet pour le centre de formation Licoformation"
                     class="mx-auto"
                     width="288" height="216"
                >
                <p class="italic text-center text-sm font-bold">
                    <a href="https://licoformation.fr" target="_blank" class="external-link">
                        Création du site internet pour le centre de formation Licoformation
                    </a>
                </p>
            </div>
            <div class="portfolio-card">
                <img src="{{ Vite::asset('resources/images/creation-site-internet-dujonjohn.png') }}"
                     alt="Création du site internet pour l'artisan carreleur John DUJON"
                     class="mx-auto"
                     width="288" height="216"
                >
                <p class="italic text-center text-sm font-bold">
                    <a href="https://dujonjohn.fr" target="_blank" class="external-link">
                        Création du site internet pour l'artisan carreleur John DUJON
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section id="contact" class="mt-24 py-12 px-4 md:px-0">
        <h2 class="bordered-title">Contact</h2>
        <p class="my-24 md:text-center">
            Besoin d'un site web ou d'une solution de développement spécifique ?
            <br>
            N'hésitez pas à me contacter, je serai ravi de discuter de votre projet et de voir comment je peux vous
            aider.
        </p>

        @if(session('success'))
            <div class="flex items-center p-4 mb-4 text-gray-500 bg-white rounded-lg shadow md:w-1/4 md:mx-auto">
                <div
                    class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg">
                    <img src="{{ Vite::asset('resources/images/icone-check.svg') }}"
                         alt="Icone de réussite"
                         width="24" height="24"
                    >
                </div>
                <div class="ml-3 font-normal">
                    <p>Merci pour votre message.</p>
                    <p>Une réponse sera vite apportée.</p>
                </div>
            </div>
        @else
            <form action="#contact" method="post" class="mt-12 md:w-1/2 md:mx-auto">
                @csrf
                <div class="relative z-0 w-full mb-12 group">
                    <input type="text" name="name" id="name"
                           class="input peer @error('name') input-error @enderror"
                           value="{{ old('name') }}"
                           placeholder=" "
                           required/>
                    <label for="name" class="input-label @error('name') input-error-label @enderror">Nom /
                        Prénom</label>

                    @error('name')
                    <div class="input-error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="relative z-0 w-full mb-12 group">
                    <input type="email" name="email" id="email"
                           class="input peer @error('email') input-error @enderror"
                           value="{{ old('email') }}"
                           placeholder=" "
                           required/>
                    <label for="email" class="input-label @error('email') input-error-label @enderror">Email</label>

                    @error('email')
                    <div class="input-error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="relative z-0 w-full mb-16 group">
                    <input type="tel" name="phone" id="phone"
                           class="input peer @error('phone') input-error @enderror"
                           value="{{ old('phone') }}"
                           placeholder=" "
                           required/>
                    <label for="phone" class="input-label @error('phone') input-error-label @enderror">Téléphone</label>

                    @error('phone')
                    <div class="input-error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="relative">
                    <textarea name="message" id="message" cols="30" rows="10"
                              class="textarea peer @error('message') input-error @enderror"
                              placeholder=" "
                              required>{{ old('message') }}</textarea>
                    <label for="message"
                           class="textarea-label @error('message') input-error-label @enderror">Message</label>

                    @error('message')
                    <div class="input-error-message">{{ $message }}</div>
                    @enderror
                </div>

                <div class="text-center mt-6">
                    <button type="submit" class="primary-button">Me contacter</button>
                </div>
            </form>
        @endif
    </section>

@endsection
