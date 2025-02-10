<?php

namespace App\Console\Commands;

use App\Models\Contact;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;

class DeleteDuplicates extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:duplicates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /** @var LoggerInterface $logger */
    protected LoggerInterface $logger;

    public function handle()
    {
        $this->logger = Log::build([
            'driver' => 'daily',
            'path' => storage_path('logs/delete-duplicates-command.log'),
        ]);

        $offset = 0;
        $limit = 10000;
        $processedCount = 0;

        $this->info('Début du traitement: ' . now());
        $this->logger->info('Début du traitement');

        while (true) {
            $duplicates = $this->getDuplicates($offset, $limit);

            if ($duplicates->isEmpty()) {
                break;
            }

            foreach ($duplicates as $duplicate) {
                $this->deactivateDuplicates($duplicate);
                $processedCount++;

                if ($processedCount % 100 === 0) {
                    $this->info("Traités: $processedCount");
                }
            }

            $offset += $limit;
        }

        $this->info('Fin du traitement: ' . now());
        $this->info("Total traité: $processedCount");
        $this->logger->info('Fin du traitement', ['total' => $processedCount]);

        return Command::SUCCESS;
    }

    private function getDuplicates($offset, $limit)
    {
        return Contact::query()
            ->where('type', 'Mail')
            ->where('active', true)
            ->select('value', \DB::raw('GROUP_CONCAT(id) as ids'), \DB::raw('COUNT(*) as count'))
            ->groupBy('value')
            ->havingRaw('COUNT(*) > 1')
            ->limit($limit)
            ->offset($offset)
            ->get();
    }

    private function deactivateDuplicates($duplicate)
    {
        try {
            $ids = explode(',', $duplicate->ids);

            // Garde le premier ID actif, désactive les autres
            $keepId = array_shift($ids);

            Contact::whereIn('id', $ids)
                ->update(['active' => false]);

            $this->logger->info('Doublons désactivés', [
                'value' => $duplicate->value,
                'kept_id' => $keepId,
                'deactivated_ids' => $ids
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de la désactivation', [
                'value' => $duplicate->value,
                'error' => $e->getMessage()
            ]);
        }
    }
}
