<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">                   
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
                                <input type="hidden" name="subcategoria_id" value="{{ $item_sub->id }}">
                                  <button class="dropdown-item" style=":">{{ $item_sub->nome }}</a>
                            </form>
                            @endif
                              @endforeach
                            </div>
                          </li>
                            
                    @endforeach
                      </ul>  
                    </div>
                  </div>
                  @if ($ordenar==true)
                
                  <li class="dropdown form-inline my-2 my-lg-0 float-right">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          organizar por:
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <form action="{{ route('shop') }}" method="post">
                                  @csrf
                                  <input type="hidden" name="order" value="1">
                                  <input type="hidden" name="subcategoria_id" value="{{ $subcategoria_id }}">
                                  <button class="dropdown-item">Menor Preço</a>
                                  </form>
                                  <form action="{{ route('shop') }}" method="post">
                                      @csrf
                                      <input type="hidden" name="subcategoria_id" value="{{ $subcategoria_id }}">
                                      <input type="hidden" name="order" value="2">
                                      <button class="dropdown-item">Maior Preço</a>
                                      </form>
                                      
                                  </div>
                      </li> 
                              
                  @endif        
                </nav>
                <hr>
    
         