   <!-- Logout Modal-->
   <div class="modal fade" id="modal_excluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecione cancelar para cancelar a operação.</div>
        <div class="modal-footer">
          <form class="delete-form" method="POST">
            @csrf
            <input type="hidden" id="id_delete" value="" name="id_delete">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <input type="submit" class="btn btn-primary" value="Excluir">
          </form>
          </div>
      </div>
    </div>
  </div>