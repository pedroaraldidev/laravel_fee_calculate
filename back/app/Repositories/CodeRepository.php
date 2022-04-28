<?php

namespace App\Repositories;

use App\Repositories\Contracts\CodeRepositoryInterface;
use App\Models\Code;


class CodeRepository implements CodeRepositoryInterface
{
    protected $entity;

    public function __construct(Code $code)
    {
        $this->entity = $code;
    }

    public function getAllCodes()
    {
        $code =  $this->entity->get();
        return response($code, 200);
    }
}
