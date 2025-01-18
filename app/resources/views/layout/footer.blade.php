<footer class="pt-12 bg-black text-center text-white">
    <div class="px-4 md:grid md:grid-cols-2 md:gap-8 md:px-0">
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
        |
        <a href="{{ Vite::asset('resources/pdf/CV_POULY_REMI.pdf') }}" target="_blank" class="underline">Curriculum Vitae</a>
    </div>

    <script>function loadScript(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"3a00b87d5f18fab30d67b0fd46aa821b"})});</script>

</footer>
