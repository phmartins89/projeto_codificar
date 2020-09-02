@extends('layout')

@section('cabecalho')
Orçamentos
@endsection

@section('conteudo')
    <a href="/orcamentos/criar" class="btn btn-dark mb-2">Adicionar</a>

        <ul class="list-group">
            @foreach($orcamentos as $orcamento)
            <li class="list-group-item"><?=$orcamento; ?></li>
            @endforeach
        </ul>
@endsection


