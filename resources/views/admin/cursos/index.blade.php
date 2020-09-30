@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')
    <div class="container">
        <h3>Lista de Cursos</h3>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Título</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Imagem</th>
                        <th scope="col">Publicado</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cursos as $curso)
                        <tr>
                            <td>{{ $curso->id }}</td>
                            <td>{{ $curso->titulo }}</td>
                            <td>{{ $curso->descricao }}</td>
                            <td>{{ $curso->imagem }}</td>
                            <td>{{ $curso->publicado }}</td>
                            <td>
                                <a class="btn btn-primary">Editar</a>
                                <a class="btn btn-danger">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn btn-success" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>
        </div>
    </div>
@endsection
