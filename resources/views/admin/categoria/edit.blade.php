@extends ('admin.layouts.dashboard')

@section('page_heading','Cadastrar Categoria')

@section('section')

        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('categoria_update') }}">
                        @csrf
                        <input type="hidden" id="id" class="form-control" value="{{ $categoria->id }}">
                    <div class="form-group">
                        <label for="ex">Nome</label>
                        <input name="nome" id="nome" class="form-control" value="{{ $categoria->nome }}">
                    </div>
                    <button type="submit" class="btn btn-default">Salvar</button>
                </form>
                @if (isset($mensagens))
                <span class="help-block">
                <strong>{{ $mensagens }}</strong>
            </span>
            @endif
            </div>
            </div>
        </div>

@endsection