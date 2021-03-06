@extends ('admin.layouts.dashboard')

@section('page_heading','Cadastrar Produto')

@section('section')

            <div class="col-lg-12">
                <form role="form" method="POST" action="{{ route('produto_store') }}" enctype="multipart/form-data" class="form_produto">
                        @csrf
                        <div class="form-group">
                                <label for="exampleFormControlSelect2">Loja</label>
                                <select multiple class="form-control" id="loja_id" name="loja_id" required>
                                        @foreach ($lojas as $item)
                                        <option value="{{ $item->id }}">{{ $item->nome }}</option>
                                        @endforeach
                                        
                                </select>
                              </div>
                        <div class="form-group">
                                <label for="exampleFormControlSelect2">Categoria/Subcategoria</label>
                                <select multiple class="form-control" id="subcategoria_id" name="subcategoria_id" required>
                                        @foreach ($subcategorias as $item)
                                        @foreach ($categorias as $item2)    
                                        <option value="{{ $item->id }}">@if($item->categoria_id==$item2->id){{ $item2->nome }}@endif/{{ $item->nome }}</option>
                                        @endforeach
                                        @endforeach

                                </select>
                              </div>
                    <div class="form-group">
                        <label for="ex">Nome</label>
                        <input name="nome" id="nome" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="ex">Preço</label>
                        <input name="preco" id="preco" class="form-control preco"type="text" data-affixes-stay="true" data-prefix="R$ " data-thousands="." data-decimal="," required>
                    </div>
                    <div class="form-group">
                            <label for="ex">Imagem</label>
                            <input type="file" name="img" id="img" class="form-control" accept="image/*" required>
                    </div>
                        <div class="form-group">
                    <div class="form-group">
                            <label for="ex">Descrição:</label>
                            <input type="text" name="descricao" id="descricao" class="form-control" required>
                        </div>
                    <div class="form-group">
                            <label for="ex">Desconto(%):</label>
                            <input type="number" name="desconto" id="desconto" class="form-control" required min="0" max="100" value="0">
                    </div>
                        <div class="form-group">
                    <div class="form-group">
                            <label for="ex">Exibir como Promoção?</label>
                            <input type="checkbox" name="promocao" value="1">Sim</div>
                        <div class="form-group">
                             <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </form>
              </div>
            </div>

@endsection