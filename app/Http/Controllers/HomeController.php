<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Mail\ContactFormClient;
use App\Services\SkillsImagesService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class HomeController extends Controller
{

    /**
     * @param SkillsImagesService $skillsImagesService
     * @return View
     */
    public function home(SkillsImagesService $skillsImagesService): View
    {
        $skillsImages = $skillsImagesService->getSkillsImages();

        return view('home/index', [
            'skillsImages' => $skillsImages,
        ]);
    }

    /**
     * @param ContactFormRequest $request
     * @return RedirectResponse
     */
    public function manageContactForm(ContactFormRequest $request): RedirectResponse
    {

        if ($request->validated()) {
            try {
                Mail::to('contact@remipouly.fr')->send(new ContactForm($request->all()));
                Mail::to($request->get('email'))->send(new ContactFormClient());
            } catch (\Exception $e) {
                Log::error('Erreur lors de l\'envoi d\'email formulaire de contact: ' . $e->getMessage());
            }
        }

        return redirect()->route('home')->with('success', ' ');
    }
}
