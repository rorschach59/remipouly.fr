<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category',
        'address',
        'city',
        'postal_code',
        'phone',
        'url',
        'domain',
        'updated_at',
    ];
}
