<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class task extends Model
{
    //
    protected $fillable = [
        'name',
        'status',
        'priority',
        'due_date'
    ];

    // beritahu laravel tipe datanya
    protected $casts = [
        'status' => 'boolean',
        'due_date' => 'date',
    ];

    // beritahu default datanya
    protected $attributes = [
        'status' => false,
        'priorty' => 3,

    ];
}
