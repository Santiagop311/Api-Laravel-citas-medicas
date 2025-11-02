<?php

namespace App\Http\Controllers;

use App\Services\AffiliateService;

class AffiliateController
{
    protected $service;
    public function __construct(AffiliateService $service)
    {
        $this->service = $service;
    }

}
