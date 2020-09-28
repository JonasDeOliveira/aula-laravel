<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)['nome' => 'Maria', 'tel' => '3334555666'],
            (object)['nome' => 'Pedro', 'tel' => '7219371289']
        ];

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
