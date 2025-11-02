<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Affiliates extends Model
{
    protected $table = 'affiliates';
    protected $fillable = [
        'name',
        'identification_type',
        'identification_number',
    ];

}
