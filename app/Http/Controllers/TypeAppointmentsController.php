<?php

namespace App\Http\Controllers;

use App\Models\Affiliates;
use App\Models\TypeAppointments;
use App\Services\TypeAppointmentService;

class TypeAppointmentsController
{
    protected $service;

    public function __construct(TypeAppointmentService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $affiliates = TypeAppointments::all();

        return response()->json($affiliates);

    }


}
