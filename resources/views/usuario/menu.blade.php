<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">

        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-11">
                    <div id="colorlib-logo"><a href="">Bem vindo,{{ Auth::user()->name }}</a></div>
                </div>
                <div class="col-sm-5 col-md-1">
                        <a href="" data-toggle="modal" data-target="#logout" class="h5">
                                <i class="fa fa-fw fa-sign-out"></i>Sair</a>
             </div>
         </div>
            <div class="row">
                <div class="col-sm-12 text-left menu-1">
                    <ul>
                        <li class="active"><a href="{{ route('index') }}">Inicio</a></li>
                        <li><a href="{{ route('shop') }}">LOJA</a></li>
                        <li><a href="" data-toggle="modal" data-target="#sujestao" class="btnsujestao">
                                <i class="fa fa-plus-square"></i>Adicionar Sugestões</a>
                        </li>
                    </ul>
                </div>
            </div>
            <h3>Sugestões:</h3>
            @foreach ($notificacao as $valor)
            <p class="notificacoes">Solicitação de {{ $valor->texto }}</p>
            @endforeach
        </div>
    
    </div>
    @if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
    @endif
    @component('usuario.modal.modal_logout')
    @endcomponent
    @component('usuario.modal.modal_send')
    @endcomponent
    @component('usuario.modal.modal_sugestao')
    @endcomponent
    
</nav>

@section('script')
@component('usuario.ajax.ajax_datatable_sujestao')
@endcomponent
@endsection
