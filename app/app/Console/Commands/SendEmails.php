<?php

namespace App\Console\Commands;

use App\Models\Contact;
use App\Models\EmailHistoric;
use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

class SendEmails extends Command
{

    private const SENDER_EMAIL = 'contact@remipouly.fr';
    private const TEMPLATE_EMAIL_ID = 19;
    private const PORTFOLIO_LINK = 'https://www.remipouly.fr/#portfolio';
    private const BREVO_LINK = 'https://api.sendinblue.com/v3/smtp/email';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:emails';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /** @var LoggerInterface $logger */
    protected LoggerInterface $logger;

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $this->logger = Log::build([
            'driver' => 'daily',
            'path' => storage_path('logs/send-emails-command.log'),
        ]);
        $templateId = 12;

        foreach ($this->getContacts($templateId) as $contact) {

            $this->sendClientEmail($contact->value);

            dd($contact->id);

            // Envoi du mail

            EmailHistoric::create([
                'contact_id' => $contact->id,
                'template_id' => $templateId
            ]);

        }


        return Command::SUCCESS;
    }

    private function getContacts(int $templateId): Collection
    {
        return Contact::leftJoin('email_historics', function ($join) use ($templateId) {
            $join->on('contacts.id', '=', 'email_historics.contact_id')
                ->where('email_historics.template_id', '=', $templateId);
        })
            ->whereNull('email_historics.id')
            ->where('contacts.type', 'Mail')
            // a retirer
            ->where('contacts.id', 8267039)
            ->select('contacts.*')
            ->limit(250)
            ->get();
    }

    /**
     * @param string $clientEmail
     */
    private function sendClientEmail(string $clientEmail): void
    {

        $params = [
            'sender' => ['email' => self::SENDER_EMAIL],
            'to' => [['email' => $clientEmail]],
            'params' => [
                'portfolio_link' => self::PORTFOLIO_LINK
            ],
            'templateId' => self::TEMPLATE_EMAIL_ID
        ];

        try {

            $response = Http::withHeaders([
                'api-key' => env('BREVO_API_KEY'),
                'Content-Type' => 'application/json'
            ])
                ->post(self::BREVO_LINK, $params);

            if ($response->status() === Response::HTTP_UNAUTHORIZED) {
                throw new \Exception('Error status : ' . $response->status());
            }

        } catch (\Exception $e) {
            $this->logger->error($e);
        }
    }
}
