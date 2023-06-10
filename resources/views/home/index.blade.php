@extends('base')

@section('title', 'Nouvelle offre')

@section('content')

    @if(session('success'))
        <div class="bg-green-300 font-bold py-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="grid grid-cols-4 gap-4 px-12">
        coucou
    </div>
@endsection
