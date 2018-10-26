<div class="modal fade" id="send" tabindex="4" style="z-index:9999" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Produto</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-lg-12">
                  <form role="form" method="POST" action="{{ route('sugestao') }}" enctype="multipart/form-data">
                          @csrf
                          <input type="hidden" id="id_produto" name="id" class="form-control" value="">
                          <input type="hidden" id="usuario_id" name="usuario_id" class="form-control" value="{{ Auth::user()->id }}">
                      <div class="form-group">
                          <label for="ex">Nome</label>
                          <input name="nome" id="nome" class="form-control" value="" required>
                      </div>
                      <div class="form-group">
                          <label for="ex">Preço</label>
                          <input name="preco" id="preco" class="form-control" value="" required>
                      </div>
                          <div class="form-group">
                      <div class="form-group">
                              <label for="ex">Descrição</label>
                      <input type="text" name="descricao" id="descricao" class="form-control" value="" required>
                          </div>
                          <div class="form-group">
                                  <button type="submit" class="btn btn-default">Enviar</button>
                          </div>
                  </form>
                </div>
              </div>
          </div>
       </div>

  </div>
</div>
</div>