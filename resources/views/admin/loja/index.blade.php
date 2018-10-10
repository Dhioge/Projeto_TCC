@extends ('admin.layouts.dashboard')

@section('page_heading','Lojas')

@section('section')

<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Lojas</div>
        <div class="card-body">
          <div class="table-responsive">
              @if (isset($mensagens))
              <span class="help-block">
              <strong>{{ $mensagens }}</strong>
              </span>
              @endif
              <a href="{{ route('loja_create') }}" class="btn btn-success">Adicionar</a>
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
                <td><a href="{{ url('/admin/lojas/edit/'.$item->id)}}" class="btn btn-info">Editar</a><a href="" class="btn btn-danger">Excluir</a></td>
               </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection