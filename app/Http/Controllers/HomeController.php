<?php

namespace App\Http\Controllers;
use App\Produto;
use App\Categoria;
use App\Subcategoria;
use App\Comentario;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::where('promocao',true)->get();
        return view('site.index',["produtos" => $produtos]);
    }
    public function shop(Request $request)
    {
        //se requisicao nao for uma pesquisa
        if(!$request->pesquisar){

            //se o requisicao de subcategoria estiver vazio ele mostra as promocoes
            if(!$request->subcategoria_id){
                $titulo = true;
                $produtos = Produto::select('lojas.nome as loja_nome','lojas.site','produtos.*')
                ->join('lojas','lojas.id','=','produtos.loja_id')
                ->where('promocao',1)->paginate(15);
                
                if($request->order){//se existir requisicao diferente de vazio
                    if ($request->order==1)
                    {
                        $produtos = Produto::select('lojas.nome as loja_nome','lojas.site','produtos.*')
                        ->join('lojas','lojas.id','=','produtos.loja_id')->where('promocao',1)
                        ->orderBy('preco', 'ASC')
                        ->paginate(15);
                    }
                    else if($request->order==2)
                    {
                        $produtos = Produto::select('lojas.nome as loja_nome','lojas.site','produtos.*')
                        ->join('lojas','lojas.id','=','produtos.loja_id')
                        ->where('promocao',1)->orderBy('preco', 'DESC')
                        ->paginate(15);
                    }
                }
            }
            else
            {
                $titulo = false;
                //senao ele mostra a subcategoria selecionada
                $produtos = Produto::select('lojas.nome as loja_nome','lojas.site','produtos.*')->join('lojas','lojas.id','=','produtos.loja_id')
                ->where('subcategoria_id',$request->subcategoria_id)
                ->paginate(20);

                if($request->order){//se existir requisicao diferente de vazio
                    
                    //se a ordenacao da requisicao é igual "1" mostra a ordenacao do menor para o maior
                    if ($request->order==1)
                    {
                        $produtos = Produto::select('lojas.nome as loja_nome','lojas.site','produtos.*')
                        ->join('lojas','lojas.id','=','produtos.loja_id')
                        ->where('subcategoria_id',$request->subcategoria_id)
                        ->orderBy('preco', 'ASC')
                        ->paginate(20);
                    }
                    else if($request->order==2)
                    //se a ordenacao da requisicao é igual "2" mostra a ordenacao do maior para o menor
                    {
                        $produtos = Produto::select('lojas.nome as loja_nome','lojas.site','produtos.*')
                        ->join('lojas','lojas.id','=','produtos.loja_id')
                        ->where('subcategoria_id',$request->subcategoria_id)
                        ->orderBy('preco', 'DESC')->paginate(20);
                    }
                    
                }
            
            }
        $ordenar= true;
    }
    else
     //senao ele pesquisa o que é contido na requisicao "pesquisar"
    {

       $titulo = false;
       $produtos = $this->pesquisar($request);
       $ordenar = false;
    }
      $categoria = Categoria::all();//retorna categorias para construir o menu
      $subcategoria = Subcategoria::all();//retorna subcategorias para construir o menu
      $subcategoria_id = isset($request->subcategoria_id)? $request->subcategoria_id : 0;
      return view('site.shop',["titulo" => $titulo, "produtos" => $produtos,'categoria'=>$categoria,'subcategoria'=>$subcategoria,'ordenar'=>$ordenar,'subcategoria_id'=> $subcategoria_id]);
    
    }



    public function pesquisar(Request $request){
        if($request->filtro_pesquisa == 0)
        {    
         $produtos = Produto::select('lojas.nome as loja_nome','lojas.site','produtos.*')->join('lojas','lojas.id','=','produtos.loja_id')->where('produtos.nome', 'like', '%' . $request->pesquisar . '%')->paginate(20);
        }
        elseif($request->filtro_pesquisa == 1){
         $produtos = Produto::select('lojas.nome as loja_nome','lojas.site','produtos.*')->join('lojas','lojas.id','=','produtos.loja_id')->where('produtos.nome', 'like', '%' . $request->pesquisar . '%')->orderBy('preco', 'ASC')->paginate(20);
        }elseif($request->filtro_pesquisa == 2){
         $produtos = Produto::select('lojas.nome as loja_nome','lojas.site','produtos.*')->join('lojas','lojas.id','=','produtos.loja_id')->where('produtos.nome', 'like', '%' . $request->pesquisar . '%')->orderBy('preco', 'DESC')->paginate(20);
        }
    return $produtos;

    }


    public function especificacoes_produtos_json($id)
    {
        $produt = Produto::select('lojas.nome as loja_nome','lojas.site as loja_site','lojas.slug as loja_img','produtos.*')->join('lojas','lojas.id','=','produtos.loja_id')->where('produtos.id',$id)->first();
        $produto['nome'] = $produt->nome;
        $produto['loja_site'] = $produt->loja_site;
        $produto['loja_nome'] = $produt->loja_nome;
        $produto['loja_img'] = $produt->loja_img;
        $produto['nome'] = $produt->nome;
        $produto['img'] = $produt->img;
        $produto['descricao'] = $produt->descricao;
        $produto['preco'] = $produt->preco;
        return $produto;

    }
  

 
}
