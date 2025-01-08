<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailHistoric extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact_id',
        'template_id',
        'sended_at',
        'updated_at',
    ];
}
