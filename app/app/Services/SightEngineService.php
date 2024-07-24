<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SightEngineService
{
    const URL = 'https://api.sightengine.com/1.0';

    public function callTextEndpoint(string $text)
    {
        $url = self::URL . '/text/check.json';
        $sightEngineCalling = Http::asMultipart()
            ->post($url, [
                'text' => $text,
                'lang' => 'fr',
                'categories' => 'profanity,personal,link,drug,weapon,extremism,violence,self-harm',
                'mode' => 'rules,ml',
                'api_user' => env('SIGHT_ENGINE_API_USER'),
                'api_secret' => env('SIGHT_ENGINE_API_SECRET'),
            ])
            ->json();

        return $this->parseTextEndpoint($sightEngineCalling);

    }

    /**
     * @param array $sightEngineCalling
     * @return array
     */
    private function parseTextEndpoint(array $sightEngineCalling): array
    {

        unset($sightEngineCalling['moderation_classes']['available']);

        return [
            'categories' => $sightEngineCalling['moderation_classes'],
            'profanity' => $sightEngineCalling['profanity'],
            'personal' => $sightEngineCalling['personal'],
            'link' => $sightEngineCalling['link'],
            'drug' => $sightEngineCalling['drug'],
            'weapon' => $sightEngineCalling['weapon'],
            'extremism' => $sightEngineCalling['extremism'],
            'violence' => $sightEngineCalling['violence'],
            'self-harm' => $sightEngineCalling['self-harm'],
        ];
    }
}
