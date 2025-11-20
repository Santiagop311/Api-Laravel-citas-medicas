<?php

namespace App\Http\Controllers;

use App\Models\Affiliates;
use App\Services\AffiliateService;

class AffiliateController
{
    protected $service;
    public function __construct(AffiliateService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $affiliates = Affiliates::all();

        return response()->json($affiliates);

    }

}
