<nav class="bg-my-orange-600 border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ env('APP_URL') }}" class="flex items-center space-x-3 rtl:space-x-reverse font-bold text-my-blue-600">
{{--            <img src="{{ Vite::asset('resources/images/logo-locationfete.png') }}"--}}
{{--                 class="h-16"--}}
{{--                 alt="Logo locationfete.fr"/>--}}
{{--            <span class="hidden self-center text-white font-medium whitespace-nowrap md:block">Location fête Béthune</span>--}}
            Location fête Béthune
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm rounded-lg md:hidden text-my-yellow-400 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg bg-my-orange-600 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-my-orange-600">
                <li>
                    <a href="{{ route('home') }}" class="block py-2 px-3 text-white rounded md:bg-transparent md:p-0" aria-current="page">Accueil</a>
                </li>
                <li>
                    <a href="{{ route('furniture.home') }}"
                       class="block py-2 px-3 text-white rounded md:hover:bg-transparent md:border-0 md:p-0">Mobilier</a>
                </li>
                <li>
                    <a href="{{ route('home') }}#avis"
                       class="block py-2 px-3 text-white rounded md:hover:bg-transparent md:border-0 md:p-0">Avis</a>
                </li>
                <li>
                    <a href="{{ route('contact.home') }}"
                       class="block py-2 px-3 text-white rounded md:hover:bg-transparent md:border-0 md:p-0">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
