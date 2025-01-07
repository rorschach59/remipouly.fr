<header>
    <nav class="py-2 bg-white md:bg-transparent">
        <div class="pl-4 container flex flex-wrap items-center justify-between mx-auto text-black">
            <a href="{{ route('home') }}" class="flex items-center">
                <img id="logo"
                     class=""
                     src="{{ Vite::asset('resources/images/logo-pouly-remi-developpeur-freelance.png') }}"
                     alt="Logo POULY REMI - Développeur web freelance"
                     width="150" height="150"
                />
            </a>
            <button data-collapse-toggle="navbar-dropdown" type="button"
                    class="inline-flex items-center p-2 ml-3 text-base rounded-lg md:hidden focus:outline-none"
                    aria-controls="navbar-dropdown" aria-expanded="false">
                <span class="sr-only">Ouvrir menu principal</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                          d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>

            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul class="flex flex-col p-4 mt-4 font-bold md:flex-row md:space-x-8 md:mt-0 md:text-base md:border-0">
                    <li class="">
                        <button id="dropdownHome" data-dropdown-toggle="dropdownNavbarHome"
                                class="flex items-center justify-between uppercase w-full py-2 pl-3 pr-4 font-bold rounded md:hover:bg-transparent md:border-0 md:p-0 md:w-auto">
                            Accueil
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbarHome"
                             class="z-10 hidden font-normal divide-y divide-gray-100 w-44 bg-white md:text-black">
                            <ul class="py-1 text-base" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{ route('home') }}#about" class="block py-2 px-4 hover:underline">
                                        A propos
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('home') }}#skills" class="block py-2 px-4 hover:underline">
                                        Compétences
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('home') }}#portfolio" class="block py-2 px-4 hover:underline">
                                        Portoflio
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="">
                        <button id="dropdownServices" data-dropdown-toggle="dropdownNavbarServices"
                                class="flex items-center justify-between uppercase w-full py-2 pl-3 pr-4 font-bold rounded md:hover:bg-transparent md:border-0 md:p-0 md:w-auto">
                            Prestations
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbarServices"
                             class="z-10 hidden font-normal divide-y divide-gray-100 w-44 bg-white md:text-black">
                            <ul class="py-1 text-base" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="{{ route('design-index') }}" class="block py-2 px-4 hover:underline">
                                        Design
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('seo-index') }}" class="block py-2 px-4 hover:underline">
                                        Référencement
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('development-index') }}" class="block py-2 px-4 hover:underline">
                                        Développement
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('home') }}#contact"
                           class="block py-2 pl-3 pr-4 uppercase hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
