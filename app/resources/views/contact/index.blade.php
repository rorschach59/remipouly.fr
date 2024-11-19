@extends('base')

@section('title', "Contactez-nous")
@section('meta-desc', "Vous avez une question ou souhaitez obtenir un devis ? Contactez nous pour toute demande liée à la location de matériel événementiel et de loisirs.")

@section('assets')
    <script async src="https://www.google.com/recaptcha/api.js"></script>
@endsection

@section('content')

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

            <form action="{{ route('contact.handleContactForm') }}#contact-us" method="post">
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
