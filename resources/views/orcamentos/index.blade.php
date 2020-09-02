@extends('layout')

@section('cabecalho')
Orçamentos
@endsection

@section('conteudo')

    @if(!empty($mensagem))
    <div class="alert alert-success">
        {{$mensagem}}
    </div>
    @endif

    <a href="/orcamentos/criar" class="btn btn-dark mb-2">Adicionar</a>

        <ul class="list-group">
            @foreach($orcamentos as $orcamento)
                <li class="list-group-item">
                    {{ $orcamento-> nome}}
                    <form>
                        <button class="btn btn-danger">Excluir</button>
                    </form>
                </li>

            @endforeach
        </ul>
@endsection

