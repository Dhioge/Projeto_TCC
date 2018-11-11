@extends ('admin.layouts.dashboard')

@section('page_heading','Lojas')

@section('section')

<a href="{{ route('loja_create') }}" class="btn btn-success">Adicionar</a>
<div class="card mb-12 .d-flex">
        <div class="card-header">
          <i class="fa fa-table"></i> Lojas</div>
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
                  <th>Site</th>
                  <th>Slogan</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th></th>
              </tfoot>
              <tbody>

                @foreach ($lojas as $item)
                <tr>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->site }}</td>
                <td>{{ $item->slug }}</td>
                <td>
                    <a href="{{ url('/admin/lojas/edit/'.$item->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-danger excluir-btn" style="margin-left:5px;color:white" data-toggle="modal" data-target="#modal_excluir" alt="Excluir" onclick="atribuir_informacoes({{ $item->id }})" name="lojas">
                    <i class="fa fa-trash"></i>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
  </div>
  </div>

@endsection