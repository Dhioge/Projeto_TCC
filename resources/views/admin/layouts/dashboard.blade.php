@extends('admin.layouts.app')
@section('script_excluir')
    <script>
    function atribuir_informacoes(valor){
    var nome = $('.excluir-btn').attr('name');
    $('#id_delete').val(valor);
    $('.delete-form').attr('action','{{ route("index") }}/admin/'+nome+'/delete/');
    }
    
    
    </script>
@endsection
@section('body')
<!-- Navigation-->
@component('admin.nav')
@endcomponent
@component('admin.modal.atualizar_produto')
@endcomponent
@component('admin.modal.logout_modal')
@endcomponent
@component('admin.modal.excluir_modal')
@endcomponent
        <div id="page-wrapper" style="margin-top:20">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                <!-- /.col-lg-12 -->
            </div>
                <div class="col-lg-12">
                @yield('section')
            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
   
@endsection