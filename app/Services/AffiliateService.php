<?php

namespace App\Services;

use App\Repositories\AffiliateRepository;

class AffiliateService
{
    protected $repository;

    public function __construct(AffiliateRepository $repository)
    {
        $this->repository = $repository;
    }

}
