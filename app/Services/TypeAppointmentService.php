<?php

namespace App\Services;

use App\Repositories\TypeAppointmentRepository;

class TypeAppointmentService
{
    protected $repository;
    public function __construct(TypeAppointmentRepository $repository)
    {
        $this->repository = $repository;
    }

}
