<?php

namespace App\Http\Middleware;

use App\Repositories\UsersRepository;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $apiKey = $request->input('api_key');
        $usersRepository = new UsersRepository();

        if (empty($apiKey)) {
            return response()->json([
                'You need to pass your api_key'
            ], Response::HTTP_NETWORK_AUTHENTICATION_REQUIRED);
        }

        if (is_null($usersRepository->findByApiKey($apiKey))) {
            return response()->json([
                'You API KEY is not correct'
            ], Response::HTTP_UNAUTHORIZED);
        }

        return $next($request);
    }
}
