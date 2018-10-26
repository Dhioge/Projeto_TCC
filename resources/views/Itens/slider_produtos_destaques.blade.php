@foreach ($produtos as $produto)

<li style="background-image: url('storage/Produtos/{{$produto->img }}');">
    <div class="overlay"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 offset-sm-3 text-center slider-text">
                <div class="slider-text-inner">
                    <div class="desc">
                        <h1 class="head-1">{{$produto->nome }}</h1>
                        <h2 class="head-2">20%</h2>
                        <h2 class="head-3">{{$produto->descricao }}</h2>
                        <p class="category"><span>New trending shoes</span></p>
                        <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</li>
@endforeach