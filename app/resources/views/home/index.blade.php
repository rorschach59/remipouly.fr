@extends('base')

@section('title', "Location d'articles événementiels et de loisirs")
@section('meta-desc', "Bienvenue chez Béthune location fête, votre spécialiste en location de matériel événementiel : chaises, tables, barnums, jeux, et plus encore. Idéal pour particuliers et professionnels, avec un service sur-mesure régional.")

@section('assets')
    <script async src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')

    <div class="md:grid md:grid-cols-5">
        <section class="p-12 px-4 bg-my-blue-600 h-screen md:col-span-2 md:pt-36 md:space-y-14 md:px-12">
            <h1 id="accueil" class="text-my-yellow-400 font-thin">Notre sélection de matériel de loisirs!</h1>
            <p class="text-my-yellow-400 font-thin md:leading-9 md:tracking-wide md:text-xl">Des tables, des chaises, des barnums, et bien plus encore. Nous
                avons tout à des prix abordables!</p>
            <div class="text-center mt-12">
                <a href="#contact" class="secondary-button">Nous contacter</a>
            </div>
        </section>
        <section class="md:col-span-3">
            <img src="{{ Vite::asset('resources/images/mariage-locationfete.webp') }}"
                 class="w-full h-screen"
                 alt="Logo locationfete.fr"/>
        </section>
    </div>

    <div id="about-us" class="py-0 text-my-blue-600 md:py-24">
        <section class="p-12 px-4 md:w-1/2 md:mx-auto">
            <h2 class="font-bold text-center md:pt-0">Qui sommes-nous ?</h2>
            <p class="font-normal tracking-wide leading-8">
                Notre entreprise de location de matériel événementiel, située à Béthune, est votre partenaire idéal pour organiser vos réceptions en toute
                simplicité. Nous mettons à votre disposition des tables, des chaises confortables, et bien plus encore...
                <br>
                L'idéal pour accueillir vos invités lors de mariages, anniversaires, réunions familiales ou événements professionnels. Soucieux de votre
                satisfaction, nous proposons du matériel propre et en excellent état.
            </p>
            <div class="text-center mt-16">
                <a href="{{ route('contact.home') }}" class="primary-button">Plus d'infos</a>
            </div>
        </section>
    </div>

    <div id="articles" class="text-my-blue-600 bg-my-beige-300 md:py-24">
        <section class="p-12 px-4 md:grid md:grid-cols-2 md:gap-4 md:place-items-center">
            <div>
                <img src="{{ Vite::asset('resources/images/chateau-gonflable.svg') }}"
                     class="mx-auto bg-my-orange-600 rounded-full md:w-96"
                     alt="Chateau gonflable"/>
            </div>
            <div class="md:pr-52">
                <h2 id="mobilier" class="font-bold text-center md:text-left">Nos articles de loisirs</h2>
                <p class="font-normal tracking-wide">
                    <span class="underline">Tables :</span> idéales pour installer vos buffets, des ateliers créatifs ou des espaces de jeux de société.
                    Elles offrent un support stable et
                    pratique pour toutes vos activités.
                </p>
                <p class="font-normal tracking-wide mt-6">
                    <span class="underline">Chaises pliantes confortables :</span> assurez le confort de vos invités tout au long de votre événement.
                    Faciles à installer et à déplacer, elles
                    s'adaptent à toutes les configurations d'espace.
                </p>
                <div class="text-center mt-16">
                    <a href="{{ route('furniture.home') }}" class="primary-button">Voir tout</a>
                </div>
            </div>
        </section>
    </div>

    <div id="reviews" class="text-my-blue-600">
        <section class="p-12 px-4 space-y-6 md:space-y-0 md:px-12">
            <h2 id="avis" class="font-bold text-center">Découvrez ce que nos clients ont à dire</h2>
            <div class="md:grid md:grid-cols-3 md:gap-40">
                @include('partials.reviews', [
                    'comment' => 'Vraiment merci car cela nous a vraiment beaucoup dépanner. Du matériel facile à transporter et peu cher. Une communication très fluide et une personne très aimable. Beaucoup de courage et une belle continuation pour la suite.',
                    'author' => 'Poma Anael'
                ])
                @include('partials.reviews', [
                    'comment' => "Notre entreprise a fait appel à ce service de location pour organiser un séminaire d'équipe, et nous sommes très satisfaits du résultat. La réservation et la livraison sur notre site dans la métropole lilloise ont été très facile. Nous recommandons vivement cette entreprise pour tout événement professionnel.",
                    'author' => 'Morel Jean'
                ])
                @include('partials.reviews', [
                    'comment' => "J'ai loué des tables et des chaises pour l'anniversaire de mon fils, et je suis absolument ravi du service ! Le matériel était en excellent état, propre et prêt à l'emploi. La réservation a été simple et rapide, avec une réponse très réactive",
                    'author' => 'Manet Paula'
                ])
            </div>
        </section>
    </div>

    <div id="contact-us" class="text-my-blue-600 md:w-1/2 md:mx-auto">
        <section class="p-12 px-4 space-y-10 md:space-y-0">
            <h2 id="contact" class="font-bold text-center">Contactez-nous</h2>
            <p>N'hésitez pas à nous contacter pour des questions ou pour obtenir un devis gratuit</p>
            <ul class="font-bold tracking-wide leading-8 md:py-6">
                <li>Béthune, France</li>
                <li>Email : contact@remipouly.fr</li>
                <li>Téléphone : 07 89 58 09 18</li>
            </ul>

            @if(session()->has('success'))
                <div class="py-2">
                    @include('partials.notification.success', ['message' => session('success')])
                </div>
            @endif

            <form action="{{ route('home.handleContactForm') }}#contact-us" method="post">
                @csrf
                @include('partials.form.input', ['placeholder' => 'Nom', 'labelName' => 'Nom *', 'name' => 'firstname', 'type' => 'text', 'required', 'value' => old('firstname')])
                @include('partials.form.input', ['placeholder' => 'Prénom', 'labelName' => 'Prénom *', 'name' => 'lastname', 'type' => 'text', 'required', 'value' => old('lastname')])
                @include('partials.form.input', ['placeholder' => 'Email', 'labelName' => 'E-mail *', 'name' => 'email', 'type' => 'email', 'required', 'value' => old('email')])
                @include('partials.form.input', ['placeholder' => 'Téléphone', 'labelName' => 'Téléphone *', 'name' => 'phone', 'type' => 'text', 'required', 'value' => old('phone')])
                @include('partials.form.text-area', ['placeholder' => 'Message *', 'labelName' => 'Message *', 'name' => 'message', 'class' => '', 'required', 'value' => old('message')])
                <div class="g-recaptcha mt-4" data-sitekey={{ env('RECAPTCHA_SITE_KEY') }}></div>
                @error('g-recaptcha-response')
                <p class="input-error-message">{{ $message }}</p>
                @enderror
                <div class="mb-10">
                    @include('partials.form.button')
                </div>
            </form>
        </section>
    </div>

    <div id="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2406.7928486580226!2d2.639484976218955!3d50.54251528073106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd23432045be65%3A0xe6ff747b5ff37780!2sLocation%20f%C3%AAte%20B%C3%A9thune!5e1!3m2!1sfr!2sfr!4v1731022062902!5m2!1sfr!2sfr"
            width="600"
            height="450"
            class="mx-auto w-screen md:w-11/12"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

@endsection
