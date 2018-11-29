@extends ('admin.layouts.dashboard')

@section('page_heading','Produtos')

@section('section')

<a href="{{ route('produto_create') }}" class="btn btn-success">Adicionar</a>
<div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Produtos</div>
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
                  <th>Nome</th>
                  <th>Imagem</th>
                  <th>Preço</th>
                  <th>Desconto</th>
                  <th>Promoção</th>
                  <th>Descrição</th>
                  <th>Ação</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($produtos as $item)
                <tr>
                <td>{{ $item->nome }}</td>
                <td>   <img src="{{ url("storage/Produtos/{$item->img}") }}" alt="{{ $item->img }}" width="100" height="100"></td>
                  <td class="preco2">{{ $item->preco }}</td>
                  <td>{{ $item->desconto }}%</td>
                  <td> @if ($item->promocao==true)Sim @else Não @endif</td>
                  <td>{{ $item->descricao }}</td>
                  <td>
<a href="{{ url('/admin/produtos/edit/'.$item->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a>
<a class="btn btn-danger excluir-btn"  style="margin-left:5px;color:white" data-toggle="modal" data-target="#modal_excluir" alt="Excluir" onclick="atribuir_informacoes({{ $item->id }})" name="produtos">
<i class="fa fa-trash"></i>
</a>
                  </td>
                  
                </td>
               </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection