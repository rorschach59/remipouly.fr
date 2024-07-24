@php use Illuminate\Support\Facades\Auth; @endphp
@extends('base')

@section('title', "Mon profil")
@section('meta-desc', 'Mon profil Pitchtonprojet - La plateforme qui aide les entrepreneurs à structurer et présenter leurs idées de manière convaincante. Obtenez des retours constructifs, améliorez vos pitchs et transformez vos projets en succès !')

@section('assets')
@endsection()

@section('content')

    <div class="mt-20">
        <div class="w-5/6 lg:w-1/2 mx-auto">

            <h1 class="uppercase text-2xl text-center my-10">Profil utilisateur</h1>

            @if(session()->has('success'))
                @include('partials.notification.success', ['message' => session('success')])
            @endif

            <form action="{{ route('users.updateProfile') }}" method="post">
                @csrf
                @include('partials.form.input', ['labelName' => 'Nom', 'name' => 'lastname', 'type' => 'text', 'value' => old('lastname', Auth::user()->lastname)])
                @include('partials.form.input', ['labelName' => 'Prénom', 'name' => 'firstname', 'type' => 'text', 'value' => old('firstname', Auth::user()->firstname)])
                @include('partials.form.input', ['labelName' => 'E-mail', 'name' => 'email', 'type' => 'email', 'value' => old('email', Auth::user()->email)])
                @include('partials.form.input', ['labelName' => 'Mot de passe', 'name' => 'password', 'type' => 'password', 'required' => false])
                @include('partials.form.input', ['labelName' => 'Confirmer le mot de passe', 'name' => 'password_confirmation', 'type' => 'password', 'required' => false])
                @include('partials.form.button', ['text' => 'Mettre à jour', 'class' => 'primary-button'])
            </form>

        </div>
    </div>

@endsection
