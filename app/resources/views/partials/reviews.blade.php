<div class="space-y-6">
    <img src="{{ Vite::asset('resources/images/etoile-avis.svg') }}"
         class="h-24 mx-auto"
         alt="Etoile avis client"/>
    <p class="">
        {{ $comment }}
    </p>
    <p class="text-my-orange-600 font-bold text-center">
        {{ $author }}
    </p>
</div>
