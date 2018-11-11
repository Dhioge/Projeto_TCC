                <ul style="list-style:none">

                    @foreach ($categoria as $item)
                    <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" aria-haspopup="false" aria-expanded="true">
                              {{ $item->nome }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="margin-left:8px">
                              @foreach ($subcategoria as $item_sub)
                            @if ($item_sub->categoria_id == $item->id)
                            <a class="dropdown-item" href="{{ url('/loja/'.$item_sub->id) }}">{{ $item_sub->nome }}</a>
                            @endif
                              @endforeach
                            </div>
                          </li>
                    @endforeach
                </ul>