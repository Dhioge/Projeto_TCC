<?php

namespace App\Http\Controllers;
use File;
use App\Produto;
use App\Loja;
use App\Categoria;
use App\Subcategoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    public function __construct()
    {
    $this->middleware('AdminCheck');
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.produto.index',["produtos"=>$produtos]);
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $lojas = Loja::all();
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        return view('admin.produto.create',['categorias'=>$categorias,'lojas'=> $lojas,'subcategorias'=>$subcategorias]);
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->loja_id = $request->loja_id;
        $produto->subcategoria_id = $request->subcategoria_id;
        $nome_img=$this->salvar_imagem($request,'Produtos');
        $produto->img = $nome_img;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->promocao = isset($request->promocao)? $request->promocao : 0 ;
        $produto->desconto = $request->desconto;
        $produto->save();
        return redirect(route('produto_index'));    

    }


    public function salvar_imagem(Request $request,$diretorio)
    {
    // Define o valor default para a variável que contém o nome da imagem 
    $nameFile = null;
 
    // Verifica se informou o arquivo e se é válido
    if ($request->hasFile('img') && $request->file('img')->isValid()) {
         
        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));
 
        // Recupera a extensão do arquivo
        $extension = $request->img->extension();
 
        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";
 
        // Faz o upload:
        $upload = $request->img->storeAs($diretorio, $nameFile);
        // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
 
        // Verifica se NÃO deu certo o upload (Redireciona de volta)
        if ( !$upload ){
            return 'error';
 
        }else{
            return $nameFile;
        }
        
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto,$id)
    {
        $produto = Produto::where('id',$id)->first();
        $lojas = Loja::all();
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all();
        return view('admin.produto.edit',['categorias' => $categorias,'lojas' => $lojas,'subcategorias' => $subcategorias,'produto' => $produto]);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        
        $produto = Produto::find($request->id);
        $produto->nome = $request->nome;
        $produto->loja_id = $request->loja_id;
        $nameFile= "storage/Produtos/";
        if(file_exists($request->img)) {
            File::delete($nameFile.$produto->img);
            $nome_img=$this->salvar_imagem($request,'Produtos');
            $produto->img = $nome_img;
        }
        
        
        $produto->subcategoria_id = $request->subcategoria_id;
        $produto->descricao = $request->descricao;
        $produto->promocao = isset($request->promocao)? $request->promocao : false ;
        $produto->desconto = $request->desconto;
        $produto->preco = $request->preco;
        $produto->update();
        return redirect(route('produto_index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Produto::destroy($request->id_delete);
        return redirect(route('produto_index'));
    }
}
