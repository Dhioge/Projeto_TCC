<?php

namespace App\Http\Controllers;
use App\Produto;
use App\Usuario;
use App\ProdutoAlteracoes;
use App\Notificacoes;
use DataTables;
use Auth;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */

    public function __construct(){
    
    $this->middleware('UserCheck');
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
    date_default_timezone_set('America/Sao_Paulo');
    }
    
    public function index()
    {
        $notificacao = Notificacoes::where('usuario_id',Auth::user()->id)->get();
        return view('usuario.inicial',['notificacao'=>$notificacao]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json_produtos_datatable(Request $request)
    {
        return datatables()->of(Produto::all())->toJson();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function enviar_sugestao(Request $request)
    {
        $notificacao = new Notificacoes;
        $notificacao->usuario_id = $request->usuario_id;
        $notificacao->status = 'nao_lida';
        $notificacao->titulo = 'Sugestão de Atualização';
        $notificacao->texto = 'Alteração do Produto '.$request->nome;
        $notificacao->destinatario = 'admin';
        $notificacao->save();
        $produto = new ProdutoAlteracoes;
        $produto->notificacao_id = $notificacao->id;
        $produto->produto_id = $request->id;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $nome_img=$this->salvar_imagem($request,'Produtos_alteracoes');
        $produto->img = $nome_img;
        $produto->save();
        return redirect('usuario')->with('msg', 'Sugestão enviada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        
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
}
