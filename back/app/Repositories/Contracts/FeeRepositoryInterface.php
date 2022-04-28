<?php

namespace App\Repositories\Contracts;

interface FeeRepositoryInterface {

    public function priceMinute(string $dddOrigin, string $dddDestination);

    public function feeCalculate(string $dddOrigin, string $dddDestination, int $usedMinutes, int $minutesPlan);

}

