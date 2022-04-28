<?php
namespace App\Services;

use App\Repositories\Contracts\FeeRepositoryInterface;
use Illuminate\Support\Str;

class FeeService{
    private int $percentage = 10;
    protected $feeRepository;

    public function __construct(FeeRepositoryInterface $feeRepository)
    {
        $this->feeRepository = $feeRepository;
    }

    public function priceMinute(string $dddOrigin, string $dddDestination)
    {
        $valuePerMinute =  $this->feeRepository->priceMinute($dddOrigin, $dddDestination);
        return $valuePerMinute;
    }

    public function feeCalculate(string $dddOrigin, string $dddDestination, int $usedMinutes, int $minutesPlan)
    {
        if(isset($this->priceMinute($dddOrigin, $dddDestination)[1]))
        {
            $valuePerMinute = $this->priceMinute($dddOrigin, $dddDestination)[1]->value_min;
            $additionalMinuteValue = $valuePerMinute + $valuePerMinute/100 * $this->percentage;
            $surplusMinutes = $minutesPlan >= $usedMinutes ? 0 : $usedMinutes - $minutesPlan;
            $additionalFee = $surplusMinutes * $additionalMinuteValue;
            $noPlanValue = $usedMinutes * $valuePerMinute;
            return response(['additional_fee' => number_format($additionalFee, 2), 'no_plan_value' => number_format($noPlanValue,2 )]);
        }
        else
        {
            return response('Error:' , 404);
        }
    }
}
