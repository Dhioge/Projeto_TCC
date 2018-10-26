@extends('admin.layouts.app')

@section('body')
      
<!-- Navigation-->

@component('admin.nav')
@endcomponent
        <div id="page-wrapper" style="margin-top:100px">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                @yield('section')
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
      <!-- Logout Modal-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Deseja realmente encerrar a sessão?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Selecione cancelar para continuar na sessão atual.</div>
            <div class="modal-footer">
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" >
                @csrf
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-primary" href="{{ route('logout') }}">Sair</button>
              </form>
              </div>
          </div>
        </div>
      </div>
@endsection