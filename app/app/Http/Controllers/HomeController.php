<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\IpUtils;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/index');
    }

    public function handleContactForm(ContactFormRequest $request)
    {
        $data = $request->validated();
        $recaptcha = $request->input('g-recaptcha-response');
        $url = 'https://www.google.com/recaptcha/api/siteverify';

        $params = [
            'secret' => config('services.recaptcha.secret'),
            'response' => $recaptcha,
            'remoteip' => IpUtils::anonymize($request->ip())
        ];

        $response = Http::post($url, $params);
        $result = json_decode($response);

        if (!$response->successful() && $result->success == true) {
            $request->session()->flash('message', 'Veuillez compléter le recaptcha pour continuer.');
            return redirect()->back();
        }

        Mail::to(env('CONTACT_EMAIL'))->send(new ContactForm($data));

        return redirect()->route('home')->with('success', 'Votre message a été envoyé avec succès');
    }
}
