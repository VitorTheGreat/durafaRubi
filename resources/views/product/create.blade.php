@extends('layouts.black.main')

@section('title', 'Produtos')<!-- adding a title -->

@section('layouts.black.content')

@if (session('status') || session('cad_produto'))
    <div class="alert alert-success">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="tim-icons icon-simple-remove"></i>
        </button>
        <span>
        <b> Sucesso - </b> {{session('status')}} {{session('cad_produto')}}</span>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="tim-icons icon-simple-remove"></i>
        </button>
        <span>
        {{-- <b> Error - </b> {{$errors->first('referencia')}}</span> --}}
        @foreach ($errors->all() as $error)
            <b> Error - </b> {{$error}} </span> <br />
        @endforeach
    </div>
@endif

<h1>Novo Produto</h1>
<hr />

<div class="row">
    <!-- / COMEÇA CADASTRO PRODUTO -->

<div class="col-xl-12 col-sm-6 mb-5" id="produto">
    <div class="card">
      {{-- <div class="card-header">Cadastro Produto</div> --}}
      <div class="card-body">

        <form method="POST" action="/product">
        @csrf
          <div class="form-group">
            <div class="form-row">

              <div class="col-md-3">
                <label for="exampleInputName">Referência</label>
                <input value="{{ old('referencia') ?? $product->referencia}}" placeholder="Referencia" class="form-control" list="lista_referencia" name="referencia">
                <datalist id="lista_referencia">
                    @foreach ($references as $refer)
                        <option value="{{$refer->referencia}}" />
                    @endforeach
                </datalist>
              </div>

              <div class="col-md-3">
                <label for="exampleInputName">Marca</label>
                  <input value="{{ old('marca') ?? $product->marca}}" name="marca" type="text" placeholder="Marca" class="form-control input-md" >
              </div>


              <div class="col-md-5">
                <label for="exampleConfirmPassword">Cor</label>
                <input value="{{ old('cor') ?? $product->cor}}" placeholder="Cor" class="form-control" list="lista_cor" name="cor">
                <datalist id="lista_cor">
                    @foreach ($colors as $color)
                    <option value="{{$color->nome}}" />
                    @endforeach
                </datalist>
              </div>

                <div class="button-down col-md-1">
                  <!-- Button trigger modal cor-->
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#cor">
                    Novo
                  </button>
                </div>


          </div>
        </div>

          <div class="form-group">
            <div class="form-row">

              <div class="col-md-5">
                <label for="exampleInputEmail1">Tipo</label>
                  <select name="id_tipo" class="form-control">
                      @foreach ($types as $type)
                        <option value="{{$type->idtipo}}">{{$type->tipo . ' '. $type->genero}}</option>
                      @endforeach
                  </select>
              </div>

              <div class="button-down col-md-1">
                <!-- Button trigger modal TIPO-->
                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tipo">
                  Novo
                </button>
              </div>

              <div class="col-md-5">

                <label for="exampleInputPassword1">Descrição</label>
                  <input value="{{ old('descricao') ?? $product->descricao}}" name="descricao" type="text" placeholder="Descrição" class="form-control input-md" >
              </div>


            </div>
          </div>


          <div class="form-group">
            <div class="form-row">

                    <div class="col-md-12">
                        <label for="exampleInputEmail1">Tamanho</label>
                        <div class="input-group input-group-sm mb-3">
                            @foreach ($sizes as $size)
                                <div class="input-group-prepend mb-2 col-2">
                                    <input name="idtamanho[]" id="idtamanho[]" value="{{$size->idtamanho}}" hidden>
                                    <span class="input-group-text" id="inputGroup-sizing-sm">{{$size->tamanho}}</span>
                                    <input type="number" name="quantidade[]" id="quantidade[]" value="0" class="form-control form-control-sm" aria-label="Small" placeholder="QTD" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="button-down">
                      <!-- Button trigger modal descricao-->
                      <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tamanho">
                        Novo Tamanho
                      </button>
                    </div>

            </div>
          </div>

            <div class="form-group">
              <div class="form-row">
              <div class="col-md-3">
                <label for="exampleInputPassword1">Preço de Compra</label>
                  <input name="preco_compra" type="text" value="{{old('preco_compra') ?? $product->preco_compra}}" placeholder="R$" class="form-control input-md" >
              </div>
              <div class="col-md-3">
                <label for="exampleInputPassword1">Preço de Venda</label>
                  <input name="preco_venda" type="text" value="{{old('preco_venda') ?? $product->preco_venda}}" placeholder="R$" class="form-control input-md" >
              </div>

            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Fornecedor</label>
                  <select name="id_fornecedor" class="form-control">
                      @foreach ($providers as $provider)
                      <option value="{{$provider->idfornecedor}}"> {{$provider->nome}} </option>
                      @endforeach
                  </select>
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Estoques Fisico</label>
                  <select name="id_estoques" class="form-control">
                      @foreach ($storages as $storage)
                        <option value="{{$storage->idestoques}}">{{$storage->nome_estoques}}</option>
                      @endforeach
                  </select>
              </div>
            </div>
          </div>

          <button name="btn_cadastra" class="btn btn-primary" type="submit">Registrar</button>
        </form>
      </div>
    </div>
</div>
<!-- /.TERMINA CADASTRO PRODUTO -->

</div>

{{--  Modals to create new color, size, reference  --}}
@include('product.modals.prod_modals')


@endsection
