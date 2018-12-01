@extends ('admin.layouts.dashboard')

@section('page_heading','Cadastrar Loja')

@section('section')

            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('loja_store') }}" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                        <label for="ex">Nome</label>
                        <input name="nome" id="nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ex">Site</label>
                        <input name="site" id="site" class="form-control" placeholder="www.exemple.com">
                    </div>
                    <div class="form-group">
                            <label for="ex">Slogan</label>
                            <input type="file" name="slug" id="slug" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                </form>
              </div>

@endsection