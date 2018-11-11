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
        $produtos = Produto::paginate(5);
        return view('site.index',["produtos" => $produtos]);
    }
    public function shop($subcategoria_id=0)
    {
        $slider_produto = Produto::paginate(5);
        if($subcategoria_id == 0){
            $produtos = Produto::where('promocao',1)->paginate(15);
        }else{
            $produtos = Produto::where('subcategoria_id',$subcategoria_id)->paginate(15);
        }

        $categoria = Categoria::all();
        $subcategoria = Subcategoria::all();
        return view('site.shop',["produtos" => $produtos,'categoria'=>$categoria,'subcategoria'=>$subcategoria,'slider_produto'=>$slider_produto]);
    }
    public function produto_json($id){
        
        $produt = Produto::where('id',$id)->first();
        $produto['nome'] = $produt->nome;
        $produto['img'] = $produt->img;
        $produto['descricao'] = $produt->descricao;
        $produto['preco'] = $produt->preco;
        return $produto;

    }
    public function enviar_comentario(Request $request)
    {
        $comentario = new Comentario;
        $comentario->usuario_id = $request->usuario_id;
        $comentario->comentario = $request->comentario;
        $comentario->produto_id = $request->produto_id;
        $comentario->save();

    }
    public function comentario_json($id){
        
        $comentario = Comentario::orderBy('comentarios.created_at', 'asc')->select('usuarios.name','usuarios.email','comentarios.*')->join('usuarios','usuarios.id','=','comentarios.usuario_id') ->get();
        
        return $comentario;

    }
 
}
