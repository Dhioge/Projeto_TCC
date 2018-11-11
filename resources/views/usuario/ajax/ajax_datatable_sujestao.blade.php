<script type="text/javascript">
//tabela apresentada em usuario/modal/modal.sujestao.blade.php
//funcao para inserir a tabela de sujestao de produtos inserido em usuario/menu.blade.php
    $(document).ready(function() {
      var table = $('#tableitem').DataTable( {
                        "processing":true,
                        "serverSide":true,
                        "ordering":false,
                        "searching":true,
                        //url que contem meu json
        "ajax": "http://127.0.0.1:8000/usuario/produtos_table",
          "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            },
            //atributos do meu objeto
          "columns": [
            { "data": "id" },
            { "data": "nome" },
            { "data": "subcategoria_id" },
            { "data": "preco" },
            { "data": "descricao" },
            //botao que aciona o modal onde é apresetado os dados de um unico registro do json
            // para enviar a sujestao sobre ele
            { "class":"",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": "<a  data-toggle='modal' data-target='#send' id='Btn-enviar'  class=\"btn btn-default btn-enviar\">Enviar Sujestão</a>"},
            ],
       });
       //funcao que aciona um modal e apresenta as possiveis modificacoes a serem enviadas de um registro
       $('#tableitem tbody').on('click', '.btn-enviar', function (){
       var $row = $(this).closest('tr');
       var data =  $('#tableitem').DataTable().row($row).data();
        $('#send #id_produto').attr("value", data['id']);
        $('#send #nome').attr("placeholder", data['nome']);
        $('#send #preco').attr("placeholder", data['preco']);
       $('#send #descricao').attr("placeholder", data['descricao']);
    });
     });
    
      </script>