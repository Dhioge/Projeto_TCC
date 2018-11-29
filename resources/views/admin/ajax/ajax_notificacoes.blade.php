<script type="text/javascript">
    //funcao para inserir as notificacoes, incluido em admin/nav.blade.php
    function notificacoes(){                
    $.getJSON( "http://127.0.0.1:8000/notificacoes", function( data ) {
      $.each( data, function( key, val ) {
        var items = [];
        var modal = 'nenhum'

        if(val['tipo']=='atualizar_produto'){
            modal = 'atualizar_produto'
        }
        else{
            modal = 'mensagem'
        }
        
        items.push('<a href="'+'/alterar_produto/'+val['id']+'" class="list-group-item">'
                                +'<i class="fa fa-tasks fa-fw"></i>'+ val['titulo']
                                +'<span class="pull-right text-muted small"><em>'+val['created_at']+'</em></span>'
                            +'</a>');
        $( "<a/>", {
        "class": "dropdown-item",
        "href" : "",
        "data-target" : "#"+modal,
        html: items.join( "" )
        }).appendTo( ".drop-itens");
      });
    });
    }
    //funcao para renovar notificacoes
    function timeout() {
        //apaga notificacoes
        $(".drop-itens").empty();
        //define o tempo para renovar as notificacoes
        setTimeout(function () {
            timeout();
            notificacoes()
            
        }, 20000);

    }
    //iniciar a primeira busca
    notificacoes();
    //looping de busca ajax
    timeout();
    </script>
                        