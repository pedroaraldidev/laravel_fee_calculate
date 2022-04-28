<?php
namespace App\Services;

use App\Repositories\Contracts\PlanRepositoryInterface;
use Illuminate\Support\Str;

class PlanService{
    protected $planRepository;

    public function __construct(PlanRepositoryInterface $planRepository)
    {
        $this->planRepository = $planRepository;
    }

    public function getMinutesPlan()
    {
        return $this->planRepository->getMinutesPlan();
    }


}
