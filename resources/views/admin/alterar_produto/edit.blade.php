@extends ('admin.layouts.dashboard')

@section('page_heading','Adicionar Sugestão de alteração')

@section('section')
Sugestão de {{ $notificacao->name }}
            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('update_sugestao') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $produto->produto_id }}">
                    <input type="hidden" name="id_notificacao" value="{{ $notificacao->id }}">
                <div class="form-group" >
                    <label for="ex">Nome</label>
                    <input class="form-control" value="{{ $produto->nome }}" required disabled>
                    <input type="hidden" name="nome" id="nome" class="form-control" value="{{ $produto->nome }}" >
                </div>
                <div class="form-group">
                    <label for="ex">Preço</label>
                    <input  class="form-control" value="{{ $produto->preco }}" required disabled>
                    <input type="hidden" name="preco" id="preco" class="form-control" value="{{ $produto->preco }}">
                </div>
                    <div class="form-group">
                <div class="form-group">
                    <label for="ex">Imagem</label>
                    <input type="file" name="img" id="img" class="form-control" accept="image/*">
                    <img src="{{ url("storage/Produtos_alteracoes/{$produto->img}") }}" alt="{{ $produto->img }}" width="100" height="100">
                </div>
                <div class="form-group">
                        <label for="ex">Descrição</label>
                <input type="text" class="form-control" value="{{ $produto->descricao }}" required disabled>
                <input type="hidden" name="descricao" id="descricao" class="form-control" value="{{ $produto->descricao }}">
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