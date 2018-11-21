@extends ('admin.layouts.dashboard')

@section('page_heading','Subcategorias')

@section('section')
<a href="{{ route('subcategoria_create') }}" class="btn btn-success">Adicionar</a>

<div class="card mb-3">
  <div class="card-header">
    <i class="fa fa-table"></i> Subcategorias</div>
        <div class="card-body">
          <div class="table-responsive">
              @if (session('msg'))
              <div class="alert alert-success">
                  {{ session('msg') }}
              </div>
              @endif
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                <th>Categoria</th>
                <th>Subcategoria</th>
                <th>Ação</th>
                </tr>
              </thead>
              <tbody>
                @foreach($subcategorias as $item)
                <tr>
                  <tr>
                    @foreach ($categorias as $item2)
                    @if($item2->id == $item->categoria_id)
                    <td>{{ $item2->nome}}</td>
                    @endif
                    @endforeach
                    <td>{{ $item->nome}}</td>
                    <td>
                        <a href="{{ url('/admin/subcategorias/edit/'.$item->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-danger excluir-btn" style="margin-left:5px;color:white" data-toggle="modal" data-target="#modal_excluir" alt="Excluir" onclick="atribuir_informacoes({{ $item->id }})" name="categorias">
                        <i class="fa fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection