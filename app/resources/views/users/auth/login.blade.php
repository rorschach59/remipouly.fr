@extends('base')

@section('title', "Connexion")
@section('meta-desc', 'Connexion Cleaned content')

@section('content')

    <div class="mt-20 px-4 md:px-0">
        <div class="text-center mb-20 space-y-4">
            <h1 class="text-2xl">Connexion</h1>
            <a href="{{ route('register') }}"
               class="text-sm text-purple-600 italic font-medium hover:underline block">Pas encore de compte ?
            </a>
        </div>
        <form class="max-w-sm mx-auto" method="post" action="{{ route('connect') }}">
            @csrf

            @if(session()->has('status'))
                @include('partials.notification.success', ['message' => session('status')])
            @endif

            @include('partials.form.input', ['labelName' => 'Email', 'name' => 'email', 'type' => 'email', 'value' => old('email')])
            @include('partials.form.input', ['labelName' => 'Mot de passe', 'name' => 'password', 'type' => 'password', 'value' => old('password')])

            <div class="my-2">
                <a href="{{ route('forgottenPassword.request') }}"
                   class="text-sm text-purple-600 italic font-medium hover:underline">Mot de passe oublié ?</a>
            </div>

            @include('partials.form.button', ['text' => 'Me connecter', 'class' => 'w-full'])

        </form>
    </div>

@endsection
