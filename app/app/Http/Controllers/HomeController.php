<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Mail\ContactFormClient;
use App\Models\Contact;
use App\Services\SkillsImagesService;
use Symfony\Component\HttpFoundation\Request;
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

    public function unsubscribeEmail(Request $request)
    {
        $contactId = $request->get('contact_id');

        if (empty($contactId)) {
            return redirect()->route('home');
        }

        return view('home/unsubscribe-email', [
            'contactId' => $contactId
        ]);
    }

    public function handleUnsubscribeEmail(Request $request)
    {
        $contactId = $request->get('contact_id');

        if (empty($contactId)) {
            return redirect()->route('home');
        }

        $contact = Contact::find($contactId);
        $contact->update([
            'want_to_receive_email' => 0
        ]);

        return redirect()
            ->route('unsubscribe-email', ['contact_id' => $contactId])
            ->with('success', ' ');
    }
}
