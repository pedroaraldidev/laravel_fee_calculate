<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FeeService;

class FeeController extends Controller
{
    protected $feeService;

    public function __construct(FeeService $feeService)
    {
        $this->feeService = $feeService;
    }

    public function priceMinute(Request $request)
    {
        $dddOrigin = $request->dddOrigin ?? null;
        $dddDestination = $request->dddDestination ?? null;
        return $this->feeService->priceMinute($dddOrigin, $dddDestination);
    }

    public function feeCalculate(Request $request)
    {
        $dddOrigin = $request->dddOrigin ?? null;
        $dddDestination = $request->dddDestination ?? null;
        $usedMinutes =  $request->usedMinutes ?? null;
        $minutesPlan = $request->minutesPlan ?? null;
        return $this->feeService->feeCalculate($dddOrigin, $dddDestination, $usedMinutes, $minutesPlan);
    }

}
