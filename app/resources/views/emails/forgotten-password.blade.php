Bonjour {{ $user->firstname }},

Nous avons reçu une demande de réinitialisation de votre mot de passe associé à votre compte <a href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a>.
Si vous n'avez pas initié cette demande, veuillez ignorer cet email.

Pour procéder à la réinitialisation de votre mot de passe, veuillez cliquer sur le lien ci-dessous :

<a href="{{ $url }}">{{ $url }}</a>

Ce lien expirera dans 15 minutes pour des raisons de sécurité.

Cordialement
