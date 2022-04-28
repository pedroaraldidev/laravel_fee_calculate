<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CodeService;

class CodeController extends Controller
{
    protected $codeService;

    public function __construct(CodeService $codeService)
    {
        $this->codeService = $codeService;
    }

    public function getAllCodes()
    {
        return $this->codeService->getAllCodes();
    }

}
