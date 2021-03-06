@extends('layout')

@section('cabecalho')
           Adicionar Orçamento
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
        <form method="post">

            @csrf
              <div class="form-group">
                  <label for="nome" class="">Nome do Cliente</label>
                  <input type="text" class="form-control" name="nome" id="nome">

                  <label for="vendedor" class="">Nome do Vendedor</label>
                  <input type="text" class="form-control" name="vendedor" id="vendedor">

                  <label for="descricao" class="">Descrição do Orçamento</label>
                  <input type="text" class="form-control" name="descricao" id="descricao">

                  <label for="valor" class="">Preço</label>
                  <input type="text" class="form-control" name="valor" id="valor">

                  <label for="data" class="">Data</label>
                  <input type="date" class="form-control" name="data" id="data">

              </div>
                <button class="btn btn-primary">Adicionar</button>

        </form>
@endsection
