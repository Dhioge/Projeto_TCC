@extends ('admin.layouts.dashboard')

@section('page_heading','Editar Subcategoria')

@section('section')

        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('subcategoria_store') }}">
                        @csrf
                        <input type="hidden" id="id" class="form-control" value="{{ $subcategoria->id }}">
               
                        <div class="form-group">
                                <label for="exampleFormControlSelect2">Categoria</label>
                                <select multiple class="form-control" id="categoria_id" name="categoria_id">
                                        @foreach ($categorias as $item)
                                        <option value="{{ $item->id }}" @if($item->id==$categoria_selected->id) selected @endif>{{ $item->nome }}</option>
                                        @endforeach
                                        
                                </select>
                              </div>
                    <div class="form-group">
                        <label for="ex">Nome</label>
                        <input name="nome" id="nome" class="form-control" value="{{ $subcategoria->nome }}">
                    </div>
                    <button type="submit" class="btn btn-default">Salvar</button>
                </form>
              </div>
            </div>
        </div>

@endsection