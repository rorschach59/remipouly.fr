<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'type',
        'value',
        'want_to_receive_email',
        'updated_at',
    ];

    public function emailHistorics()
    {
        return $this->hasMany(EmailHistoric::class, 'contact_id');
    }
}
