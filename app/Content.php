<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $casts = [
        'finished' => 'boolean',
        'updating' => 'boolean',
    ];
}
