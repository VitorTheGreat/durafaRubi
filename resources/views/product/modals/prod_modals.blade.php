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
              <form method="POST" action="/size">
                @csrf
                  <div class="input-group mb-3">
                      <input type="text" name="tamanho" id="tamanho" class="form-control" placeholder="Novo Tamanho" >
                      <button type="submit" class="btn btn-primary btn-fab btn-icon" name="btn_cadastra_tamanho">
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

      <!-- Modal referencia-->
      <div class="modal modal-black fade" id="referencia" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Criar Nova referencia</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="/reference">
                @csrf
                  <div class="input-group mb-3">
                      <input type="text" name="referencia" id="referencia" class="form-control" placeholder="Nova Referencia" >
                      <button type="submit" class="btn btn-primary btn-fab btn-icon" name="btn_cadastra_referencia">
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
