@extends('layouts.black.main')

@section('title', 'Produtos')<!-- adding a title -->

@section('layouts.black.content')

@if (session('status'))
    <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="tim-icons icon-simple-remove"></i>
        </button>
        <span>
        <b> Success - </b> {{session('status')}}</span>
    </div>
@endif

<h1>Seção Produto</h1>
<hr />
<div class="row">
    <div class="col-lg-12">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-category">Opções</h5>
          <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> O que deseja fazer?</h3>
        </div>
        <div class="card-body">
            <a class="btn btn-primary" href="/product/create">Novo Produto</a>
            <button class="btn btn-primary" href="#" data-toggle="modal" data-target="#tamanho">Novo Tamanho</button>
            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#referencia">Nova Referência</a>
            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#tipo">Novo Tipo</a>
            <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#cor">Nova Cor</a>
            <a class="btn btn-primary" href="#">Estoque Completo</a>
        </div>
      </div>
    </div>
  </div>

  <h2>Lista de Produtos</h2>
  <hr />
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
            <p>Legenda Botões:
                <small class="text-success"><i class="tim-icons icon-paper"></i> - Imprimir Etiquetas</small>
                <small class="text-warning"><i class="tim-icons icon-pencil"></i> - Editar Produto</small>
                <small class="text-danger"><i class="tim-icons icon-simple-remove"></i> - Excluir Produto</small>
            </p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table tablesorter " id="">
              <thead class=" text-primary">
                <tr>
                  {{-- <th>ID</th> --}}
                  <th>REF</th>
                  <th>Estoque</th>
                  <th>Quantidade</th>
                  <th>Tamanho</th>
                  <th>Marca</th>
                  <th>Preço</th>
                  <th>Tipo</th>
                  <th>Cor</th>
                  <th>Descricao</th>
                  <th> Opções </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        {{--  <td>{{$produto->idproduto}}</td>  --}}
                        <td>{{$produto->referencia}}</td>
                        <td>{{$produto->nome_estoques}}</td>
                        <td>{{$produto->quantidade}}</td>
                        <td>{{$produto->tamanho}}</td>
                        <td>{{$produto->marca}}</td>
                        <td>{{$produto->preco}}</td>
                        <td>{{$produto->tipo_full}}</td>
                        <td>{{$produto->cor}}</td>
                        <td>{{$produto->descricao}}</td>
                        <td>
                            <a href="product/{{$produto->idproduto}}/qrcode" class="btn btn-success btn-fab btn-icon"  name="btn_etiqueta_produto">
                                <i class="tim-icons icon-paper"></i>
                            </a>
                            <a class="btn btn-warning btn-fab btn-icon"  name="btn_editar_produto">
                                <i class="tim-icons icon-pencil"></i>
                            </a>
                            <a class="btn btn-danger btn-fab btn-icon"  name="btn_delete_produto">
                                <i class="tim-icons icon-simple-remove"></i>
                            </a>
                        </td>
                        </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>

{{--  Modals to create new color, size, reference  --}}
@include('product.modals.prod_modals')

@endsection
