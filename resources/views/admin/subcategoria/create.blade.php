@extends ('admin.layouts.dashboard')

@section('page_heading','Cadastrar Subcategoria')

@section('section')

        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('subcategoria_store') }}">
                        @csrf
                        <div class="form-group">
                                <label for="exampleFormControlSelect2">Categoria</label>
                                <select multiple class="form-control" id="categoria_id" name="categoria_id">
                                        @foreach ($categorias as $item)
                                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @endforeach
                                        
                                </select>
                              </div>
                    <div class="form-group">
                        <label for="ex">Nome</label>
                        <input name="nome" id="nome" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-default">Salvar</button>
                </form>
              </div>
            </div>
        </div>

@endsection