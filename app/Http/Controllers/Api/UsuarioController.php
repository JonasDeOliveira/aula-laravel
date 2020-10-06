<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function cadastrar(Request $req)
    {
        $dados = $req->all();
        $dados['password'] = Hash::make($dados['password']);

        return response()->json(Usuario::create($dados), 201);
    }
}
