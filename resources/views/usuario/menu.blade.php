<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">

        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-9">
                    <div id="colorlib-logo"><a href="">Bem vindo,{{ Auth::user()->name }}</a></div>
                </div>
                <div class="col-sm-5 col-md-3">
             </div>
         </div>
            <div class="row">
                <div class="col-sm-12 text-left menu-1">
                    <ul>
                        <li class="active"><a href="{{ route('index') }}">Inicio</a></li>
                        <li><a href="contact.html">Perfil</a></li>
                        <li><a href="" data-toggle="modal" data-target="#sujestao" class="btnsujestao">
                        <i class="fa fa-fw fa-sign-out"></i>Adicionar Sugestões</a>
                        </li>
                        <li class="cart"><a href="" data-toggle="modal" data-target="#carrinho"><i class="icon-shopping-cart"></i> Carrinho [0]</a></li>
                        <li class="nav-item"><a href="" data-toggle="modal" data-target="#logout">
                        <i class="fa fa-fw fa-sign-out"></i>Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @component('usuario.modal_carrinho')
    @endcomponent
    @component('usuario.modal_logout')
    @endcomponent
    @component('usuario.modal_send')
    @endcomponent
    @component('usuario.modal_sugestao')
    @endcomponent

@section('script')
<script type="text/javascript">
$(document).ready(function() {
  var table = $('#tableitem').DataTable( {
                    "processing":true,
                    "serverSide":true,
                    "ordering":false,
                    "searching":true,
    "ajax": "http://127.0.0.1:8000/usuario/search",
      "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
        },
      "columns": [
        { "data": "id" },
        { "data": "nome" },
        { "data": "subcategoria_id" },
        { "data": "preco" },
        { "data": "descricao" },
        { "class":"",
                "orderable":      false,
                "data":           null,
                "defaultContent": "<a  data-toggle='modal' data-target='#send' id='Btn-enviar' type=\"button\" class=\"btn btn-default btn-enviar\">Enviar Sujestão</a>"},
        ],
   });
   $('#tableitem tbody').on('click', '.btn-enviar', function (){
   var $row = $(this).closest('tr');
   var data =  $('#tableitem').DataTable().row($row).data();
    $('#send #id_produto').attr("value", data['id']);
    $('#send #nome').attr("placeholder", data['nome']);
    $('#send #preco').attr("placeholder", data['preco']);
   $('#send #descricao').attr("placeholder", data['descricao']);
});
 });

  </script>
@endsection
</nav>