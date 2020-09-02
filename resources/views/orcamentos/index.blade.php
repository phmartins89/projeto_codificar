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

    <a href="{{route('form_criar_orcamento')}}" class="btn btn-dark mb-2">Adicionar</a>

        <ul class="list-group">
            @foreach($orcamentos as $orcamento)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $orcamento-> nome}}
                    <form method="post" action="/orcamentos/{{$orcamento->id}}"
                            onsubmit="return confirm('Tem certeza que gostaria de remover {{$orcamento->nome}}?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </li>

            @endforeach
        </ul>
@endsection

