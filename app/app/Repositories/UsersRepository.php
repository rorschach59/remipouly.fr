<?php

namespace App\Repositories;

use App\Models\User;

class UsersRepository
{
    /**
     * @param string $apiKey
     * @return User|null
     */
    public function findByApiKey(string $apiKey): User|null
    {
        $user = User::query()
            ->where('api_key', $apiKey)
            ->where('is_active', 1)
            ->get()
            ->first();

        return $user ?? null;
    }
}
