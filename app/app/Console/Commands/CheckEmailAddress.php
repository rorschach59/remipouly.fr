<?php

namespace App\Console\Commands;

use App\Models\Contact;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;

class CheckEmailAddress extends Command
{

    private const EMAIL_VERIFIER_URL = 'https://emailverifier.reoon.com/api/v1/verify';
    private const LIMIT = 500;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check-email-address';

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
            'path' => storage_path('logs/check-email-address-command.log'),
        ]);

        $this->info('[' . date('Y-m-d H:i:s') . ']');
        $i = 0;

        $contacts = $this->getContacts();

        foreach ($contacts as $contact) {

            try {
                $url = self::EMAIL_VERIFIER_URL . '?email=' . $contact->value . '&key=' . env('REOON_API_KEY') . '&mode=power';

                $response = Http::get($url);

                if ($response->status() !== Response::HTTP_OK) {
                    throw new \Exception('Error status : ' . $response->status());
                }

                $contact->update([
                    'email_status' => json_decode($response->body())->status
                ]);

                $i++;
                $this->info('En cours ' . $i);

            } catch (\Exception $e) {
                $this->logger->error($e);
            }

        }

        $this->info('[' . date('Y-m-d H:i:s') . ']');

        return Command::SUCCESS;
    }

    private function getContacts()
    {
        return Contact::query()
            ->where('type', 'Mail')
            ->where('active', true)
            ->whereNull('email_status')
            ->limit(self::LIMIT)
            ->get();
    }
}
