<?php

namespace App\Console\Commands;

use App\Models\Contact;
use App\Models\Lead;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GetCsvInfos extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-csv-infos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @throws \Exception
     */
    public function handle()
    {
        $this->info('[' . date('Y-m-d H:i:s') . ']');

        $csvFilePath = __DIR__ . '/0.csv';
        $separator = ',';
        $i = 0;

        if (($handle = fopen($csvFilePath, 'r')) !== false) {
            $headers = fgetcsv($handle, 10000, $separator);

            while (($row = fgetcsv($handle, 10000, $separator)) !== false) {

                try {

                    if (!isset($row[36])) {
                        continue;
                    }

                    $contacts = $row[36];
                    $contacts = json_decode($contacts, true);

                    if (empty($contacts)) {
                        continue;
                    }

                    DB::beginTransaction();

                    $lead = Lead::create([
                        'name' => $row[0],
                        'description' => $row[1],
                        'category' => $row[2],
                        'address' => $row[9],
                        'city' => $row[10],
                        'postal_code' => $row[11],
                        'phone' => $row[15],
                        'url' => $row[16],
                        'domain' => $row[17]
                    ]);

                    $contacts = $row[36];
                    $contacts = json_decode($contacts);

                    foreach ($contacts as $contact) {
                        Contact::create([
                            'lead_id' => $lead->id,
                            'type' => $contact->type,
                            'value' => $contact->value,
                        ]);
                    }

                    DB::commit();

                    $i++;
                    if ($i % 10000 === 0) {
                        $this->info('[' . date('Y-m-d H:i:s') . '] : ' . $i);
                    }

                } catch (\Exception $e) {
                    DB::rollBack();
                    dump($e->getMessage());
                }
            }
        }
    }

}
