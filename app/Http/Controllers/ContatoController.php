<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return "Esse é o index do ContatoController";
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
