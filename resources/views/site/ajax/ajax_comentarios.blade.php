<script>
// funcao comentarios relacionado ao id do produto
function comentarios(id){        
var comentario="";   
$('#produto_id').val(id);
  var qtd_comentario=0;
  //ajax que retorna os comentarios em relacao a um produto
   $.getJSON( "http://127.0.0.1:8000/comentario/"+id, function( data ) {
     //apaga todo conteudo dos comentarios no momento do click
     $('.comentarios').empty();
     //apaga todo conteudo da quantidade dos comentarios no momento do click
     $('.qtd-comentarios').empty();
     //percorre o json e atribui os valores em uma variavel
     $.each( data, function( key, val ) {
    var b = val['created_at'];
      comentario+='<p class="user-comentario"><b>'+val['name']+' Email:'+val['email']+' '+b+'</b><br>'+
      ''+val['comentario']+'</p>';
      qtd_comentario++;//contador que verifica a quantidade de comentarios
   });
  
    //insere o valor da variavel( comentarios ) no corpo do collapse do modal
  $('.comentarios').append(comentario)
    //insere a quantidade de comentarios por produto
  $('.qtd-comentarios').append(qtd_comentario)
   });
}
</script>