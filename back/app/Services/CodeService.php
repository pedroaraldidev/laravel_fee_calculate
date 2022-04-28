<?php
namespace App\Services;

use App\Repositories\Contracts\CodeRepositoryInterface;
use Illuminate\Support\Str;

class CodeService{

    protected $codeRepository;

    public function __construct(CodeRepositoryInterface $codeRepository)
    {
        $this->codeRepository = $codeRepository;
    }

    public function getAllCodes()
    {
        $codes =  $this->codeRepository->getAllCodes();
        return $codes;
    }
}
