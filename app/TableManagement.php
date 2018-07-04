<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableManagement extends Model
{
    // Set the fillable fields for post request.
    protected $fillable = [
        'month', 'opening_estimation', 'store_location', 'store_owner', 'h_44', 'h_32', 'h_22', 'h_21', 'h_8', 'h_3', 'h_2', 'h',
    ];
}
