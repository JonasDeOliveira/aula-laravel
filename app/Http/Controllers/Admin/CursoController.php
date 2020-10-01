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
        $curso = $req->all();

        if ($req->hasFile('imagem')) {
            $curso['imagem'] = $this->tratarImagem($req, $curso);
        }

        Curso::create($curso);

        $req->session()
          ->flash(
              'mensagem',
              "Curso de $req->titulo adicionado com sucesso"
          );

        return redirect()->route('admin.cursos');
    }

    public function editar($id)
    {
        $curso = Curso::find($id);

        return view('admin.cursos.editar', compact('curso'));
    }

    public function atualizar(Request $req, $id)
    {
        $requisicao = $req->all();

        if ($req->hasFile('imagem')) {
            $requisicao['imagem'] = $this->tratarImagem($req, $requisicao);
        }

        $curso = Curso::find($id);
        $curso->update($requisicao);

        $req->session()
            ->flash(
                'mensagem',
                "Curso de $curso->titulo atualizado com sucesso"
            );

        return redirect()->route('admin.cursos');
    }

    public function deletar(Request $req, $id)
    {
        $curso = Curso::find($id);
        $curso->delete();

        $req->session()
            ->flash(
                'mensagem',
                "Curso de $curso->titulo removido com sucesso"
            );

        return redirect()->route('admin.cursos');
    }

    public function tratarImagem(Request $req, $curso)
    {
        $imagem = $req->file('imagem');
        $num = rand(1111, 9999);
        $dir = 'img/cursos/';
        $ext = $imagem->guessClientExtension();
        $nomeImagem = 'imagem_' . $num . '.' . $ext;
        $imagem->move($dir, $nomeImagem);

        return $dir . $nomeImagem;
    }


}
