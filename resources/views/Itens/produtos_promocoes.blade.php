@foreach ($produtos as $produto)
<div class="col-lg-3 mb-4 text-center">
    <div class="product-entry border">
        <a href="#" class="prod-img">
            <img src="{{ url("storage/Produtos/{$produto->img}") }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
        </a>
        <div class="desc">
            <h2><a href="#">{{ $produto->nome }}</a></h2>
            <span class="price">${{ $produto->preco }}</span>
        </div>
    </div>
</div>
@endforeach