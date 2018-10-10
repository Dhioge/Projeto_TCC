@extends ('admin.layouts.dashboard')

@section('page_heading','Cadastrar Loja')

@section('section')

        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('loja_store') }}">
                        @csrf
                    <div class="form-group">
                        <label for="ex">Nome</label>
                        <input name="nome" id="nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ex">Site</label>
                        <input name="site" id="site" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ex">Slogan</label>
                        <input name="slug" id="slug" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Salvar</button>
                </form>
              </div>
            </div>
        </div>

@endsection