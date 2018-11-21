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

        if(!$request->pesquisar){
        if(empty($request->subcategoria)){
            $produtos = Produto::where('promocao',1)->paginate(15);
            if(!empty($request)){
                if ($request->order_by==1) {
                    return $produtos = Produto::where('promocao',1)->orderBy('id', 'DESC')->paginate(15);
                }
                else if($request->order_by==2) {
                    return $produtos = Produto::where('promocao',1)->orderBy('id', 'ASC')->paginate(15);
                }
            }
        }else{
            
            $produtos = Produto::where('subcategoria_id',$request->subcategoria)->paginate(20);
            if(!empty($request)){
                if ($request->order_by==1) {
                    $produtos = Produto::where('subcategoria_id',$request->subcategoria)->orderBy('id', 'DESC')->paginate(20);
                }
                else if($request->order_by==2) {
                    $produtos = Produto::where('subcategoria_id',$request->subcategoria)->orderBy('id', 'ASC')->paginate(20);
                }
                
            }
            
        }
        $ordenar= true;
    }
    else
    {
       $produtos = $this->pesquisar($request);
       $ordenar = false;
    }
      $slider_produto = Produto::paginate(5);
      $categoria = Categoria::all();
      $subcategoria = Subcategoria::all();
      
      return view('site.shop',["produtos" => $produtos,'categoria'=>$categoria,'subcategoria'=>$subcategoria,'slider_produto'=>$slider_produto,'ordenar'=>$ordenar]);
    
    }



    public function pesquisar(Request $request){
        $produtos = Produto::Where('nome', 'like', '%' . $request->pesquisar . '%')->paginate(20);
        return $produtos;
    }


    public function especificacoes_produtos_json($id)
    {
        $produt = Produto::where('id',$id)->first();
        $produto['nome'] = $produt->nome;
        $produto['img'] = $produt->img;
        $produto['descricao'] = $produt->descricao;
        $produto['preco'] = $produt->preco;
        return $produto;

    }
  

 
}
