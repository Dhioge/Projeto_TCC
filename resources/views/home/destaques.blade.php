<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                <h2>Destaques</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            @foreach ($produtos as $produto)
            <div class="col-lg-3 mb-4 text-center">
                <div class="product-entry border">
                    <a href="" class="prod-img">
                        <img src="{{ url("storage/Produtos/{$produto->img}") }}" class="img-fluid" alt="Free html5 bootstrap 4 template">
                    </a>
                    <div class="desc">
                        <h2><a href="#">{{ $produto->nome }}</a></h2>
                        <span class="price">${{ $produto->preco }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p><a href="#" class="btn btn-primary btn-lg">Shop All Products</a></p>
            </div>
        </div>
    </div>
</div>