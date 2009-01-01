@extends('layout')

@section('cabecalho')
           Editar Orçamentos
@endsection

@section('conteudo')
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/orcamentos/editar/{{$orcamento->id}}">
            @csrf

              <div class="form-group">
                  <label for="nome" class="">Nome do Cliente</label>
                  <input value="{{ $orcamento->nome }}" type="text" class="form-control" name="nome" id="nome">

                  <label for="vendedor" class="">Nome do Vendedor</label>
                  <input value="{{ $orcamento->vendedor }}" type="text" class="form-control" name="vendedor" id="vendedor">

                  <label for="descricao" class="">Descrição do Orçamento</label>
                  <input value="{{ $orcamento->descricao }}" type="text" class="form-control" name="descricao" id="descricao">

                  <label for="valor" class="">Preço</label>
                  <input value="{{ $orcamento->valor }}" type="text" class="form-control" name="valor" id="valor">

                  <label for="data" class="">Data</label>
                  <input value="{{ $orcamento->data }}" type="date" class="form-control" name="data" id="data">

              </div>
              
                    <button class="btn btn-primary" onclick="window.location='{{ url("/orcamentos") }}'">Editar</button>

        </form>
@endsection
