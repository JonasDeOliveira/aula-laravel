<h3>Essa é a view index</h3>

@foreach($contatos as $contato)
    <p>Nome: {{ $contato->nome }} Tel: {{ $contato->tel }}</p>
@endforeach
