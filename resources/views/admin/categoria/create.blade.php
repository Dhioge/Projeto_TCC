@extends ('admin.layouts.dashboard')

@section('page_heading','Cadastrar Categoria')

@section('section')

            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('categoria_store') }}">
                        @csrf
                    <div class="form-group">
                        <label for="ex">Nome</label>
                        <input name="nome" id="nome" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>
                @if (isset($mensagens))
                <span class="help-block">
                <strong>{{ $mensagens }}</strong>
            </span>
            @endif
            </div>
            </div>

@endsection