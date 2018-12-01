<?php

namespace App\Http\Controllers;

use App\Notificacoes;
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
        $produto->preco = $request->preco;
        $produto->update();
        return redirect(route('produto_index'))->with('msg', 'Sugestão aceita com sucesso!');;
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
}
