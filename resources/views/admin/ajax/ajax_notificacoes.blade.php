<script type="text/javascript">
    //funcao para inserir as notificacoes inserido em admin/nav.blade.php
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
        
        items.push('<span class="text-success"><strong><i class="fa fa-long-arrow-up fa-fw"></i></strong></span><span class="small float-right text-muted"></span><div class="dropdown-message large">'+val['titulo']+'</div></a>' );
        $( "<a/>", {
        "class": "dropdown-item",
        "data-toggle" :"modal",
        "href" :"",
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
                        