<?php

namespace App\Http\Controllers;

use App\Services\SightEngineService;
use Illuminate\Http\Request;

class TextController extends Controller
{

    public function index(Request $request, SightEngineService $sightEngineService)
    {
        $text = $request->input('text');

        /**
         * @todo remplacer par un validateur
         */
        if (empty($text)) {
            return response()->json([
                'status' => 'error',
                'response' => 'Give me some text'
            ]);
        }

        $response = $sightEngineService->callTextEndpoint($text);

        return response()->json([
            'status' => 'success',
            'response' => $response
        ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
