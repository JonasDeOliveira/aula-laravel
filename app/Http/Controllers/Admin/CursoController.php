<?php

namespace App\Http\Controllers\Admin;

use App\Curso;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(Request $req)
    {
        $cursos = Curso::all();
        $mensagem = $req->session()->get('mensagem');
        return view('admin.cursos.index', compact('cursos', 'mensagem'));
    }

    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req)
    {
          Curso::create($req->all());

          $req->session()
              ->flash(
                  'mensagem',
                  'Curso adicionado com sucesso'
              );

          return redirect()->route('admin.cursos');
    }
}
