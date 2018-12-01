@extends ('admin.layouts.dashboard')

@section('page_heading','Editar Produto')

@section('section')

            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('produto_update') }}" enctype="multipart/form-data" class="form_produto">
                        @csrf
                        <input type="hidden" id="id" name="id" class="form-control" value="{{ $produto->id }}">

                        <div class="form-group">
                                <label for="exampleFormControlSelect2">Loja</label>
                                <select multiple class="form-control" id="loja_id" name="loja_id" required>
                                        @foreach ($lojas as $item)
                                        <option value="{{ $item->id }}" @if($item->id==$produto->loja_id) selected @endif>{{ $item->nome }}</option>
                                        @endforeach
                                        
                                </select>
                              </div>
                        <div class="form-group">
                                <label for="exampleFormControlSelect2">Categoria/Subcategoria</label>
                                <select multiple class="form-control" id="subcategoria_id" name="subcategoria_id" required>
                                        @foreach ($subcategorias as $item)
                                        @foreach ($categorias as $item2)    
                                        <option value="{{ $item->id }}" @if($item->id==$produto->subcategoria_id) selected @endif>@if($item->categoria_id==$item2->id){{ $item2->nome }}@endif/{{ $item->nome }}</option>
                                        @endforeach
                                        @endforeach

                                </select>
                              </div>
                    <div class="form-group">
                        <label for="ex">Nome</label>
                        <input name="nome" id="nome" class="form-control" value="{{$produto->nome }}" required>
                    </div>
                    <div class="form-group">
                        <label for="ex">Preço</label>
                        <input name="preco" id="preco" class="form-control preco" value="{{$produto->preco }}" required>
                    </div>
                    <div class="form-group">
                            <label for="ex">Imagem</label>
                            <input type="file" name="img" id="img" class="form-control" accept="image/*">
                            <img src="{{ url("storage/Produtos/{$produto->img}") }}" alt="{{ $item->img }}" width="100" height="100">
                        </div>
                        <div class="form-group">
                    <div class="form-group">
                            <label for="ex">Descrição</label>
                    <input type="text" name="descricao" id="descricao" class="form-control" value="{{$produto->descricao }}" required>
                    </div>
                    <div class="form-group">
                                <label for="ex">Desconto(%):</label>
                                <input type="number" name="desconto" id="desconto" class="form-control" required min="0" max="100" value="{{ $produto->desconto }}">
                        </div>
                            <div class="form-group">
                        <div class="form-group">
                                <label for="ex">Exibir como Promoção?</label>
                                <input type="checkbox" name="promocao" value="1"  @if($produto->promocao == true) checked @else @endif>Sim
                       </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-warning">Salvar</button>
                        </div>
                </form>
              </div>
            </div>

@endsection