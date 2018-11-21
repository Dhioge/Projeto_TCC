                <ul style="list-style:none">

                    @foreach ($categoria as $item)
                    <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" aria-haspopup="false" aria-expanded="true">
                              {{ $item->nome }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left:-2px">
                              @foreach ($subcategoria as $item_sub)
                            @if ($item_sub->categoria_id == $item->id)
                           
                            <form action="{{  route('shop')  }}" method="post">
                                @csrf
                                <input type="hidden" name="subcategoria" value="{{ $item_sub->id }}">
                                  <button class="dropdown-item">{{ $item_sub->nome }}</a>
                            </form>
                            @endif
                              @endforeach
                            </div>
                          </li>

                    @endforeach
                </ul>                       
   <form class="form-inline my-2 my-lg-0 float-right" method="post">
       @csrf
       <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar.." aria-label="Search" name="pesquisar">
       <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
     </form>
           </div>
           
       </div>
                