<?php

namespace App\Services;

use App\Repositories\QuotaRepository;

class QuotaService
{

    protected $repository;
    public function __construct(QuotaRepository $quotaRepository)
    {
        $this->repository = $quotaRepository;
    }

}
