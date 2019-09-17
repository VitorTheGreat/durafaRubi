@extends('layouts.black.main')

@section('title', 'Produtos')<!-- adding a title -->

@section('layouts.black.content')

<h1>Novo Produto</h1>
<hr />

{{ $errors->first('referencia') }}
{{ $errors->first('marca') }}
{{ $errors->first('cor') }}
{{ $errors->first('id_tipo') }}
{{ $errors->first('descricao') }}
{{ $errors->first('preco_compra') }}
{{ $errors->first('preco_venda') }}
{{ $errors->first('id_fornecedor') }}
{{ $errors->first('id_estoques') }}
{{ $errors->first('idtamanho') }}
{{ $errors->first('quantidade') }}

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
                        {{--  <option value="{{$type->idtipo}}">{{$type->tipo . ' '. $type->genero}}</option>  --}}
                        <option value="{{old('id_tipo') ?? $type->idtipo}}">{{$type->tipo . ' '. $type->genero}}</option>
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
                  <input name="descricao" type="text" placeholder="Descrição" class="form-control input-md" >
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
                                    <input name="idtamanho[]" id="id_tamanho" value="{{$size->idtamanho}}" hidden>
                                    <span class="input-group-text" id="inputGroup-sizing-sm">{{$size->tamanho}}</span>
                                    <input type="number" name="quantidade[]" id="quantidade_tamanho" value="0" class="form-control form-control-sm" aria-label="Small" placeholder="QTD" aria-describedby="inputGroup-sizing-sm">
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
                  <input name="preco_compra" type="text" placeholder="R$" class="form-control input-md" >
              </div>
              <div class="col-md-3">
                <label for="exampleInputPassword1">Preço de Venda</label>
                  <input name="preco_venda" type="text" placeholder="R$" class="form-control input-md" >
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

<!-- MODALS -  CONTEM CAMPOS PARA INSERIR NOVOS DADOS NO BANCO SEM PRECISAR MUDAR DE PAGINA -->
<!-- Modal tipo-->
<div class="modal modal-black fade" id="tipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Criar Novo Tipo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="modelo/cadastra_tipo.php">
                <div class="input-group mb-3">
                    <input type="text" name="tipo" id="tipo" class="form-control" placeholder="Modelo" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <select name="genero" id="genero" class="form-control">
                      <option value="Masculino">Masculino</option>
                      <option value="Feminino">Feminino</option>
                      <option value="Unisex">Unisex</option>
                    </select>
                    <button class="btn btn-primary btn-fab btn-icon"  name="btn_cadastra_tipo">
                        <i class="tim-icons icon-simple-add"></i>
                    </button>
                </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
        </div>
      </div>


      <!-- Modal tamanho-->
      <div class="modal modal-black fade" id="tamanho" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Criar Novo tamanho</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="modelo/cadastra_tamanho.php">
                  <div class="input-group mb-3">
                      <input type="text" name="tamanho" id="tamanho" class="form-control" placeholder="Novo Tamanho" >
                      <button class="btn btn-primary btn-fab btn-icon"  name="btn_cadastra_tamanho">
                            <i class="tim-icons icon-simple-add"></i>
                        </button>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
        </div>
      </div>

      <!-- Modal cor-->
      <div class="modal modal-black fade" id="cor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Criar Nova cor</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="modelo/cadastra_cor.php">
                  <div class="input-group mb-3">
                      <input type="text" name="nome_cor" id="nome_cor" class="form-control" placeholder="Nova Cor" >
                      <button class="btn btn-primary btn-fab btn-icon"  name="btn_cadastra_cor">
                            <i class="tim-icons icon-simple-add"></i>
                        </button>
                  </div>
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
          </div>
        </div>
      </div>
      <!-- // TERMINA MOLDAS -->



@endsection
