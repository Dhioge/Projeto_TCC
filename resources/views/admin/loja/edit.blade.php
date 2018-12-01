@extends ('admin.layouts.dashboard')

@section('page_heading','Editar Loja')

@section('section')

            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('loja_update') }}">
                        @csrf

                        <input type="hidden" id="id" class="form-control" value="{{ $loja->id }}">
                    <div class="form-group">
                        <label for="ex">Nome</label>
                        <input name="nome" id="nome" class="form-control" value="{{ $loja->nome }}">
                    </div>
                    <div class="form-group">
                        <label for="ex">Site</label>
                        <input name="site" id="site" class="form-control" value="{{ $loja->site }}" >
                    </div>
                    <div class="form-group">
                        <label for="ex">Slogan</label>
                        <input name="slug" id="slug" class="form-control" value="{{ $loja->slug }}">
                    </div>
                    <button type="submit" class="btn btn-warning">Salvar</button>
                </form>

                @if (isset($mensagens))
                <span class="help-block">
                <strong>{{ $mensagens }}</strong>
            </span>
            @endif
              </div>
            </div>

@endsection