<?php

namespace App\Http\Controllers;

use App\Services\TypeAppointmentService;

class TypeAppointmentsController
{
    protected $service;

    public function __construct(TypeAppointmentService $service)
    {
        $this->service = $service;

    }


}
