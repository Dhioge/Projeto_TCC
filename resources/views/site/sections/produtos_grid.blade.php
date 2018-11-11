<div class="colorlib-product" >
    <div class="container">

           
        <div class="row">
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
                        <h2><a href="#">{{ $produto->nome }}</a></h2>
                        <a href="" onclick="especificacoes({{ $produto->id }})" class="text-center especificacoes" data-toggle="modal" data-target="#ver_produto">
                        <i class="fa fa-eye"></i>Ver mais
                        <img src="{{ url("storage/Produtos/{$produto->img}") }}" class="img-fluid especificacoes-img" alt="">
                    </a>
                    </a>
                    <div class="desc">
                        <span class="price float-right">Preço: ${{ $produto->preco }}</span>
                    </div>
                    <a href="" onclick="comentarios({{$produto->id}})" class="text-center" data-toggle="modal" data-target="#ver_comentario" style=>Comentarios<i class="fa fa-comments"></i></a>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
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