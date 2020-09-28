<!--extends - define o arquivo que será tomado como base-->
@extends('layout.site')

<!--define o valor da variavel title-->
@section('title', 'Contatos')

<!--define o valor da variavel conteudo-->
@section('conteudo')
    <h3>conteudo</h3>
    @foreach($contatos as $contato)
        <p>Nome: {{ $contato->nome }} Tel: {{ $contato->tel }}</p>
    @endforeach
@endsection
