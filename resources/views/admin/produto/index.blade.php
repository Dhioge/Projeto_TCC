@extends ('admin.layouts.dashboard')

@section('page_heading','Produtos')

@section('section')

<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Produtos</div>
        <div class="card-body">
          <div class="table-responsive">
              @if (isset($mensagens))
              <span class="help-block">
              <strong>{{ $mensagens }}</strong>
              </span>
              @endif
              <a href="{{ route('produto_create') }}" class="btn btn-success">Adicionar</a>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Imagem</th>
                  <th>Preço</th>
                  <th>Descrição</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th></th>
              </tfoot>
              <tbody>

                @foreach ($produtos as $item)
                <tr>
                <td>{{ $item->nome }}</td>
                <td>   <img src="{{ url("storage/Produtos/{$item->img}") }}" alt="{{ $item->img }}" width="100" height="100">
                  <td>{{ $item->preco }}</td>
                  <td>{{ $item->descricao }}</td>
                  <td><a href="{{ url('/admin/produtos/edit/'.$item->id)}}" class="btn btn-info">Editar</a><a href="" class="btn btn-danger">Excluir</a></td>
                  
                </td>
               </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection