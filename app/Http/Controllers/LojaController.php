<?php

namespace App\Http\Controllers;
use File;
use App\Loja;
use Illuminate\Http\Request;

class LojaController extends Controller
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
        $loja = Loja::all();
        return view('admin.loja.index',['lojas'=> $loja]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.loja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loja = new Loja;
        $loja->nome = $request->nome;
        $loja->site = $request->site;
        $nome_img=$this->salvar_slogan($request,'Lojas');
        $loja->slug = $nome_img;
        $loja->save();
        return redirect(route('loja_index'))->with('msg', 'Loja cadastrada com sucesso!');;  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function show(Loja $loja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function edit(Loja $loja, $id)
    {
        $loja = Loja::where('id',$id)->get();
        $loja=$loja[0];
        return view('admin.loja.edit',['loja'=>$loja]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loja $loja)
    {
        $loja = Loja::find($request->id);
        $loja->nome = $request->nome;
        $loja->site = $request->site;
        $loja->slug = $request->slug;
        $loja->save();
        return redirect(route('loja_index'))->with('msg', 'Loja atualizada com sucesso!');;  
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Loja::destroy($request->id_delete);
        return redirect(route('loja_index'))->with('msg', 'Loja excluida com sucesso!');;
    }

    public function salvar_slogan(Request $request,$diretorio)
    {
    // Define o valor default para a variável que contém o nome da imagem 
    $nameFile = null;

    // Verifica se informou o arquivo e se é válido
    if ($request->hasFile('slug') && $request->file('slug')->isValid()) {
        
        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));

        // Recupera a extensão do arquivo
        $extension = $request->slug->extension();

        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";

        // Faz o upload:
        $upload = $request->slug->storeAs($diretorio, $nameFile);
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