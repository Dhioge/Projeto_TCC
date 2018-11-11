<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="margin-bottom:0px" id="mainNav">
    <a class="navbar-brand" href="{{ url('/admin') }}">Projeto</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="{{ url('/admin') }}">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Categorias">
                <a class="nav-link" href="{{ url('/admin/categorias') }}">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Categorias</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Subcategorias">
                <a class="nav-link" href="{{ url('/admin/subcategorias') }}">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Subcategorias</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Subcategorias">
                <a class="nav-link" href="{{ url('/admin/lojas') }}">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Lojas</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Subcategorias">
                <a class="nav-link" href="{{ url('/admin/produtos') }}">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Produtos</span>
                </a>
            </li>
            
        </ul>
      
        <ul class="navbar-nav ml-auto float-right">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-envelope"></i>
                    <span class="d-lg-none">Mensagens
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
                    <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">Novas Mensagens:</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>David Miller</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>Jane Smith</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <strong>John Doe</strong>
                        <span class="small float-right text-muted">11:21 AM</span>
                        <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item small" href="#">View all messages</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-1" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="d-lg-none">Alertas
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
                    <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
                </a>
                <div class="dropdown-menu drop-itens" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">Novos alertas:</h6>
                    <div class="dropdown-divider"></div>
                    <!-- Notificacao item !-->
                    
                <div class="dropdown-divider"></div>
                <div class="drop-itens">

                </div>
                <a class="dropdown-item small" href="{{ route('notificacoes') }}">Ver Todos</a>
                
                
            </div>
        </li>
        <li class="nav-item">
            <form class="form-inline my-1 my-lg-2 mr-lg-5">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Pesquisar...">
                    <span class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
            </form>
        </li>
        <li class="nav-item">
            <a class="nav-link my-1 my-lg-1 mr-lg-2" style="margin-left:50px" data-toggle="modal" data-target="#logout" >
                    <i class="fa fa-fw fa-sign-out"></i>Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Ajax !-->
    @section('script')
    @component('admin.ajax.ajax_notificacoes')
    @endcomponent
    @endsection