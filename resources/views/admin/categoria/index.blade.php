@extends ('admin.layouts.dashboard')

@section('page_heading','Categoria')

@section('section')

<a href="{{ route('categoria_create') }}" class="btn btn-success">Adicionar</a>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Categoria</div>
        <div class="card-body">
          <div class="table-responsive">
              @if (isset($mensagens))
              <span class="help-block">
              <strong>{{ $mensagens }}</strong>
              </span>
              @endif
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th></th>
              </tfoot>
              <tbody>

                @foreach ($categoria as $item)
                <tr>
                <td>{{ $item->nome }}</td>
                <td>
                    <a href="{{ url('/admin/categorias/edit/'.$item->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
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