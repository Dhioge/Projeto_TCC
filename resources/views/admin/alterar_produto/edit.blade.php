@extends ('admin.layouts.dashboard')

@section('page_heading','Adicionar Sugestão de alteração')

@section('section')
Sugestão de {{ $notificacao->name }}
            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('update_sugestao') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $produto->produto_id }}">
                <div class="form-group" >
                    <label for="ex">Nome</label>
                    <input name="nome" id="nome" class="form-control" value="{{ $produto->nome }}" required disabled>
                </div>
                <div class="form-group">
                    <label for="ex">Preço</label>
                    <input name="preco" id="preco" class="form-control" value="{{ $produto->preco }}" required disabled>
                </div>
                    <div class="form-group">
                <div class="form-group">
                        <label for="ex">Descrição</label>
                <input type="text" name="descricao" id="descricao" class="form-control" value="{{ $produto->descricao }}" required disabled>
                    </div>
                    <div class="form-group">
                            <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
            </form>
                @if (isset($mensagens))
                <span class="help-block">
                <strong>{{ $mensagens }}</strong>
            </span>
            @endif
            </div>
            </div>

@endsection