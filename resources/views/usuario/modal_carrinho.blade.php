<div class="modal fade" id="carrinho" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deseja realmente encerrar a sessão?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Produtos</div>
      <div class="modal-footer">
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" >
          @csrf
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary" href="{{ route('logout') }}">Sair</button>
        </form>
        </div>
    </div>
  </div>
</div>