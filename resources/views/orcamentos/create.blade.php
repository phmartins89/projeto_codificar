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

                  <!--<label for="vendedor" class="">Nome do Vendedor</label>
                  <input type="text" class="form-control" name="nome_vendedor" id="nome_vendedor">

                  <label for="Descrição" class="">Descrição do Orçamento</label>
                  <input type="text" class="form-control" name="desc" id="desc">

                  <label for="valor" class="">Preço</label>
                  <input type="text" class="form-control" name="preco" id="preco">

                  <label for="data" class="">Data</label>
                  <input type="text" class="form-control" name="data" id="data"> -->

              </div>
                <button class="btn btn-primary">Adicionar</button>

        </form>
@endsection
