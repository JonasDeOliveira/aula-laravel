<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contato = new Contato();
        $contatos = $contato->listar();
        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        //dd($req['nome']);
        dd($req->all());
        return 'criar';
    }

    public function editar()
    {
        return 'editar';
    }
}
