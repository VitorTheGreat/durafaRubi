@extends('layouts.black.main')

@section('title', 'Produtos')<!-- adding a title -->

@section('layouts.black.content')

<h1>Novo Produto</h1>
<hr />
{{-- <div class="row">
    <div class="card">
        <div class="card-body">
          <form>
            <div class="form-row">
              <div class="col">
                <input type="text" class="form-control" placeholder="First name">
              </div>
              <div class="col">
                <input type="text" class="form-control" placeholder="Last name">
              </div>
            </div>
            <button class="btn btn-primary btn-round">
               Registrar
            </button>
          </form>
        </div>
      </div>
</div> --}}

<div class="row">
    <!-- / COMEÇA CADASTRO PRODUTO -->

<div class="col-xl-12 col-sm-6 mb-5" id="produto">
    <div class="card">
      {{-- <div class="card-header">Cadastro Produto</div> --}}
      <div class="card-body">

        <form method="post" action="modelo/cadastra_produto.php">

          <div class="form-group">
            <div class="form-row">

              <div class="col-md-3">
                <label for="exampleInputName">Referência</label>
                <input placeholder="Referencia" class="form-control" list="lista_referencia" name="referencia">
                <datalist id="lista_referencia">
                    <option value="" />
                </datalist>
              </div>

              <div class="col-md-3">
                <label for="exampleInputName">Marca</label>
                  <input name="marca" type="text" placeholder="Marca" class="form-control input-md" required="">
              </div>


              <div class="col-md-5">
                <label for="exampleConfirmPassword">Cor</label>
                <input placeholder="Cor" class="form-control" list="lista_cor" name="cor">
                <datalist id="lista_cor">
                    <option value="" />
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
                  <option value=""></option>
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
                  <input name="descricao" type="text" placeholder="Descrição" class="form-control input-md" required="">
              </div>


            </div>
          </div>


          <div class="form-group">
            <div class="form-row">

                    <div class="col-md-12">
                        <label for="exampleInputEmail1">Tamanho</label>
                        <div class="input-group input-group-sm mb-3">
                        <div class="input-group-prepend">
                            <input name="idtamanho[]" id="id_tamanho" value="" hidden>
                            <span class="input-group-text" id="inputGroup-sizing-sm"></span>
                        </div>
                            <input type="number" name="quantidade[]" id="quantidade_tamanho" value="0" class="form-control" aria-label="Small" placeholder="QTD" aria-describedby="inputGroup-sizing-sm">
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
                  <input name="preco_compra" type="text" placeholder="R$" class="form-control input-md" required="">
              </div>
              <div class="col-md-3">
                <label for="exampleInputPassword1">Preço de Venda</label>
                  <input name="preco_venda" type="text" placeholder="R$" class="form-control input-md" required="">
              </div>

            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Fornecedor</label>
                  <select name="id_fornecedor" class="form-control">
                    <option value=""></option>
                  </select>
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Estoques Fisico</label>
                  <select name="id_estoques" class="form-control">
                  <option value=""></option>
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
<div class="modal fade" id="tipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
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
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="submit" name="btn_cadastra_tipo"><i class="fa fa-plus"></i></button>
                    </div>
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
      <div class="modal fade" id="tamanho" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
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
                      <input type="text" name="tamanho" id="tamanho" class="form-control" placeholder="Novo Tamanho" required>
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="btn_cadastra_tamanho"><i class="fa fa-plus"></i></button>
                      </div>
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
      <div class="modal fade" id="cor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
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
                      <input type="text" name="nome_cor" id="nome_cor" class="form-control" placeholder="Nova Cor" required>
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" name="btn_cadastra_cor"><i class="fa fa-plus"></i></button>
                      </div>
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
