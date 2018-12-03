<div class="modal fade" id="ver_comentario" tabindex="5" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document" >
        <div class="modal-content">
            <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel">Comentarios</h5>
                   <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                   </button>
            </div>
            <div class="modal-body">
                    <i class="fa fa-comments"></i>Comentarios (<b class="qtd-comentarios"></b>)
                    <div class="comentarios">
                    </div>
            </div>
            <div class="modal-footer">
                    @if(Auth::check() && Auth::user()->role != 'admin')
                    <form action="http://127.0.0.1:8000/comentario/enviar_comentario" method="POST" id="end_collapse">
                    @csrf
                    <input type="hidden" name="produto_id" id="produto_id">
                    <input type="hidden" name="usuario_id" value="{{Auth::user()->id }}"><legend>Enviar Comentario</legend>
                    <textarea name="comentario" id="" cols="45" rows="2" maxlength="100" style="resize: none;">
                    </textarea><br>
                    <button class="btn btn-primary btn-successs float-right" type="submit">Enviar</button>
                    </form>
                   @else
                   Entre como usuario para enviar um comentario<a href="{{ route('login') }}" class="btn btn-success ">Entrar</a>
                   @endif
            </div>
        </div>
    </div>
</div>