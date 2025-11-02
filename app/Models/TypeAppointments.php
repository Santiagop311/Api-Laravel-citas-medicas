<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeAppointments extends Model
{
    protected $table = 'types_appointments';

    protected $fillable = [
        'name',
        'description',
        'cost'
    ];
}
