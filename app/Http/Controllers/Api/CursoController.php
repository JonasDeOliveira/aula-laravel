<?php

namespace App\Http\Controllers\Api;

use App\Curso;
use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;

class CursoController extends BaseController
{
    public function __construct()
    {
        $this->classe = Curso::class;
    }
}
