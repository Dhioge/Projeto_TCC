<script type="text/javascript">
  
//funcao para inserir as especificacoes dos produtos no modal modal/modal_ver_produto.blade.php
// inserido em site/sections/produtos_grid.blade.php
    function especificacoes(id){                
   $.getJSON( "http://127.0.0.1:8000/produto/"+id, function( data ) {
     //enviar id do produto para o form do comentario
       $(".comentario_produto_id").val(id);
     //apaga todo conteudo do modal especificacoes no momento do click
       $('.produto-itens').empty();

     //percorre o json e atribui os valores em uma variavel
     $.each( data, function( key, val ) {
   produto='<h3>'+data.nome+'</h3>'+
   '<img src="{{ url("storage/Produtos/") }}/'+data.img+'" width="100" height="100"></img>'+
   '<li class="list-group-item">Descrição: <p>'+data.descricao+'</p></li>'+
   '<li class="list-group-item">Preço: <p>'+data.preco+'</p></li>';
});
$('.produto-itens').append(produto)
   });
   //executar funcao para exibir os comentarios
  }

   </script>    