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
                    <li>
                        <a href="#about"
                        class="block py-2 pl-3 pr-4 uppercase md:hover:bg-transparent md:border-0 hover:text-prtBlue-300 md:p-0">
                            A propos
                        </a>
                    </li>
                    <li>
                        <a href="#skills"
                           class="block py-2 pl-3 pr-4 uppercase hover:bg-gray-100 md:hover:bg-transparent md:border-0 hover:text-prtBlue-300 md:p-0">
                            Compétences
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio"
                           class="block py-2 pl-3 pr-4 uppercase hover:bg-gray-100 md:hover:bg-transparent md:border-0 hover:text-prtBlue-300 md:p-0">
                            Portoflio
                        </a>
                    </li>
                    <li>
                        <a href="#contact"
                           class="block py-2 pl-3 pr-4 uppercase hover:bg-gray-100 md:hover:bg-transparent md:border-0 hover:text-prtBlue-300 md:p-0">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
