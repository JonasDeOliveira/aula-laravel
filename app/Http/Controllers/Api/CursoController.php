<?php

namespace App\Http\Controllers\Api;

use App\Curso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function listar()
    {
        $dados = Curso::all();

        foreach ($dados as $dado) {
            $dado['imagem'] = url($dado['imagem']);
        }

        return response()->json($dados, 200);
    }
}
