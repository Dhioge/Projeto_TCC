<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
                <a class="navbar-brand" href="#">
                        <img src="{{ asset('/images/') }}/logo-pesca-preco.jpg" alt="" width="300" height="100"> 
                      </a>
            <div class="row">
                <div class="col-sm-7 col-md-9">
                    <div id="colorlib-logo"><a href="index.html"></a></div>
                </div>
                <div class="col-sm-5 col-md-3">
                        <div id="colorlib-logo">
                        </div>
                        @if (Auth::check())
                        <ul>

                                <li class="dropdown">
                                        <a class="nav-link dropdown-toggle h6" href="" id="navbarDropdown" role="button" aria-haspopup="false" aria-expanded="true">
                                               Minha Conta <i class="icon-user"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-top:-10px;margin-left:40px">
                                        <a class="dropdown-item"   class="h6" href="{{ route('usuario') }}">Perfil</a>
                                        <a class="dropdown-item"  class="h6" href="{{ route('logout') }}">Sair</a>
                                        </div>
                                      </li>
                            
                            </ul>       
                        @else
                        <a href="{{ route('login') }}" class="h6">Entrar/Cadastrar<i class="icon-log-in"></i></a>
                            
                        @endif
                </div>
        </div>
        <div class="sale">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center">
                            <div class="row">
                                <div class="owl-carousel2">
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">25% de Desconto!Use o cumpum: ZCWYQSALE</a></h3>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col">
                                            <h3><a href="#">fa</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-sm-12 text-left menu-1">
                <ul>
                    <li class="nav-link active"><a href="{{ route('index') }}">INICIO</a></li>
                    <li><a href="{{ route('shop') }}">LOJA</a></li>
                    <li><a href="contact.html">CONTATO</a></li>
                </li>    
                <form class="form-inline my-2 my-lg-0 float-right" method="post" action="{{  route('shop')}}">
                        @csrf
                      
                        <input class="form-control mr-sm-2" type="search" required placeholder="Pesquisar.." aria-label="Search" name="pesquisar">
                        <div class="form-group">
                                <label for="exampleFormControlSelect2" class="custom-select">Filtro: 
                                <select id="filtro_pesquisa" name="filtro_pesquisa" required id="styledSelect1">
                                    <option value="0" selected>...</option>
                                    <option value="1">Menor Preço</option>
                                    <option value="2">Maior Preço</option>
                                </select>
                            </label>
                                </div>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                      </form>    
            </ul>
                
                </div>
            </div>
            <hr>
            
            @if (isset($categoria) && isset($subcategoria))
            
            @component('site.sections.header_shop',['categoria'=>$categoria,'subcategoria'=>$subcategoria,'ordenar'=>$ordenar,'subcategoria_id'=> $subcategoria_id])
            @endcomponent
            @endif
         

</nav>
