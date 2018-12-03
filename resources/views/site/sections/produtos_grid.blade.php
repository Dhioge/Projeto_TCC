
<div class="colorlib-product" >
    @if (isset($mensagens))
                <span class="help-block">
                <strong>{{ $mensagens }}</strong>
            </span>
            @endif
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-12 text-center"  >
                    @if ($titulo == true)
                    <h2 class="text-center">Produtos em Promoção:</h2>
                    @endif
                    
            </div>
                @component('site.modal.modal_ver_produto')
                @endcomponent
                
                @component('site.modal.modal_comentarios')
                @endcomponent
               
                
        </div>
         
        <div class="row row-pb-md" >

            @foreach ($produtos as $produto)
            <div class="col-lg-3 mb-4 text-center"  >
                <div class="product-entry border"  style="padding: 15px;">
                        <a href="#" class="prod-img" >
                            <h5><a href="#" data-toggle="tooltip" data-placement="right" title="{{ $produto->nome }}">{{ $produto->nome }}</a></h5>
                            <a href="" onclick="especificacoes({{ $produto->id }})" class="text-center especificacoes" data-toggle="modal" data-target="#ver_produto">
                                    <i class="fa fa-eye"></i>Ver mais
                                    <img src="{{ url("storage/Produtos/{$produto->img}") }}" class="img-fluid especificacoes-img" alt="">
                                </a>
                            </a>
                            <div class="desc">
                                <span class="price">Ir a loja:<a href="http://{{ $produto->site }}"  class="text-center" >{{ $produto->loja_nome }}</a></span>
                                <span class="price text-center">Preço: ${{ $produto->preco }}</span>
                            </div>
                            <a href="" onclick="comentarios({{$produto->id}})" class="text-center" data-toggle="modal" data-target="#ver_comentario"><i class="fa fa-comments">Comentarios</i></a>
                            
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="row">
            <div class="col-md-12 ">
                {{ $produtos->links() }}
            </div>
        </div>
    </div>
</div>
@section('script')
@component('site.ajax.ajax_especificacoes')
@endcomponent
@component('site.ajax.ajax_comentarios')
@endcomponent
@endsection