<?php

namespace App\Http\Controllers;

use App\Notificacoes;
use File;
use App\ProdutoAlteracoes;
use App\Usuario;
use App\Produto;
use Illuminate\Http\Request;

class NotificacoesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function notificacoes()
    {
        $notificacao = Notificacoes::orderBy('created_at', 'desc')->take(7)->get();
        return $notificacao->toJson();
    }
    public function alterar_produto($id){
    $produto = ProdutoAlteracoes::where('notificacao_id',$id)->first();
    $notificacao = Notificacoes::select('usuarios.name','usuarios.email','notificacoes.*')->join('usuarios','usuarios.id','=','notificacoes.usuario_id')->where('notificacoes.id',$id)->first();
    return view('admin.alterar_produto.edit',compact('produto'),compact('notificacao'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alterar_produto_update(Request $request)
    {
        $produto = Produto::find($request->id);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $nameFile= "storage/Produtos/";
        if(file_exists($request->img)) {
            File::delete($nameFile.$produto->img);
            $nome_img=$this->salvar_imagem($request,'Produtos');
            $produto->img = $nome_img;
        }
        $produto->preco = $request->preco;
        $notificacao = Notificacoes::find($request->id_notificacao);
        $notificacao->status = 'lida';
        $produto->update();
        $notificacao->update();
        return redirect(route('produto_index'))->with('msg', 'Sugestão aceita com sucesso!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notificacoes  $notificacoes
     * @return \Illuminate\Http\Response
     */
    public function show(Notificacoes $notificacoes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notificacoes  $notificacoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Notificacoes $notificacoes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notificacoes  $notificacoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notificacoes $notificacoes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notificacoes  $notificacoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notificacoes $notificacoes)
    {
        //
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
