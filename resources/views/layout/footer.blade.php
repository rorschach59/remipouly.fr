<footer class="px-4 pt-12 bg-black text-center text-white md:px-0">
    <div class="md:grid md:grid-cols-2 md:gap-8">
        <div class="md:px-24">
        <h3 class="text-xl my-6">
            WEBMASTER FREELANCE
        </h3>
        <p class="leading-[2em]">
            Rémi, développeur web et entrepreneur indépendant.
            J'ai le privilège de convertir vos idées en expériences digitales grâce à mon expertise.
            Que vous ayez besoin d'un site internet, d'une API ou d'un développement spécifique, je suis ici pour répondre à vos exigences.
        </p>
        </div>
        <div class="mt-12 flex gap-16 justify-center items-center md:mt-0">
            <a href="mailto:contact@remipouly.fr"
               title="Email"
            >
                <img src="{{ Vite::asset('resources/images/icone-blanc-email.svg') }}"
                     alt="Icone adresse email developpeur freelance"
                     class="hover:scale-125"
                     width="38" height="36"
                >
            </a>
            <a href="https://github.com/rorschach59"
               target="_blank"
               title="Github"
            >
                <img src="{{ Vite::asset('resources/images/icone-blanc-github.svg') }}"
                     alt="Icone Github developpeur freelance"
                     class="hover:scale-125"
                     width="38" height="36"
                >
            </a>
            <a href="https://www.linkedin.com/in/r%C3%A9mi-pouly-83b53a142/"
               target="_blank"
               title="LinkedIn"
            >
                <img src="{{ Vite::asset('resources/images/icone-blanc-linkedin.svg') }}"
                     alt="Icone LinkedIn developpeur freelance"
                     class="hover:scale-125"
                     width="38" height="36"
                >
            </a>
        </div>
    </div>
    <div class="mt-12 py-4 bg-[#2A2A2A]">
        <a href="{{ route('legal-notices') }}" class="underline">Mentions légales</a>
    </div>
</footer>
