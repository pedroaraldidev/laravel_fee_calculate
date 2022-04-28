<?php

namespace App\Repositories;

use App\Repositories\Contracts\FeeRepositoryInterface;
use App\Models\Fee;


class FeeRepository implements FeeRepositoryInterface
{
    protected $entity;

    public function __construct(Fee $fee)
    {
        $this->entity = $fee;
    }

    public function priceMinute(string $dddOrigin, string $dddDestination)
    {   $valuePerMinute =  $this->entity->get()
        ->where('origin_ddd', $dddOrigin)
        ->where('destination_ddd', $dddDestination);

        return ($valuePerMinute);
    }

    public function feeCalculate(string $dddOrigin, string $dddDestination, int $usedMinutes, int $minutesPlan)
    {
        return $this->entity
        (['additional_fee' => number_format($additionalFee, 2),
        'no_plan_value' => number_format($noPlanValue,2 ), 200]);
    }
}
