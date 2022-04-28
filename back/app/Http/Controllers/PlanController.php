<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PlanService;

class PlanController extends Controller
{
    protected $planService;

    public function __construct(PlanService $planService)
    {
        $this->planService = $planService;
    }

    public function getMinutesPlan(Request $request)
    {
        $id = $request->id ?? null;
        return $this->planService->getMinutesPlan($id);
    }





}
