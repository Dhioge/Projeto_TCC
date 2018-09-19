@extends ('admin.layouts.dashboard')

@section('page_heading','Subcategorias')

@section('section')

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
               </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>

@endsection