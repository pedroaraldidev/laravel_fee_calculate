<?php

namespace App\Repositories;

use App\Repositories\Contracts\PlanRepositoryInterface;
use App\Models\Plan;


class PlanRepository implements PlanRepositoryInterface
{
    protected $entity;
    public function __construct(Plan $plan)
    {
        $this->entity = $plan;
    }

    public function getMinutesPlan()
    {
        return $this->entity->get();
    }








}
