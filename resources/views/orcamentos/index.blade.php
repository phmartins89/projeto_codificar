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

            <form method="post">
            @csrf
                <input type="text" name="nome_cliente" placeholder="Nome do Cliente ou Vendedor" style="width:50%;">

                <!--<input type="date" name="data_inicial">
                --
                <input type="date" name="data_final">-->
                
                <button class="botao_busca">Filtrar</button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th> 
                            Id    
                        </th>

                        <th>
                            Nome do Vendedor
                        </th>

                        <th>
                            Data
                        </th>

                        <th>
                            Nome do Cliente
                        </th>

                        <th></th>
                    </tr>    
                </thead>

                <tbody>
                    @foreach($orcamentos as $orcamento) 
                    <tr>
                        <td>
                        {{ $orcamento->id}}
                        </td>
                            <td>
                            {{ $orcamento-> vendedor}}
                                
                            </td>
                            <td>
                        {{date('d/m/Y', strtotime($orcamento->data))}}
                        </td>
                        <td>
                        {{ $orcamento->nome}}
                        </td>
                        <td>
                            @method('PUT')
                            <button class="btn btn-info btn-sm" onclick="window.location='{{ url("/orcamentos/editar/".$orcamento->id) }}'"><i class="fas fa-pen"></i></button>
                            <form method="post" action="/orcamentos/{{$orcamento->id}}" onsubmit="return confirm('Tem certeza que gostaria de remover {{$orcamento->nome}}?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
           
            </table>
        </ul>
@endsection

