<?php

namespace App\Http\Controllers;

use App\Subcategoria;
use App\Categoria;
use Illuminate\Http\Request;

class SubcategoriaController extends Controller
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
        $subcategorias = Subcategoria::all();
        $categorias = Categoria::all();
        return view('admin.subcategoria.index',['subcategorias'=>$subcategorias,'categorias'=> $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.subcategoria.create',['categorias'=>$categorias]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategoria = new Subcategoria;
        $subcategoria->nome = $request->nome;
        $subcategoria->categoria_id = $request->categoria_id;
        $subcategoria->save();
        return redirect(route('subcategoria_index'))->with('msg', 'Subcategoria cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategoria $subcategoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategoria $subcategoria,$id)
    {
        $subcategoria = Subcategoria::where('id',$id)->first();
        $categoria = Categoria::where('id',$subcategoria->categoria_id)->first();
        $categorias = Categoria::all();
        return view('admin.subcategoria.edit',['subcategoria'=>$categoria,'categoria_selected'=>$categoria,'categorias'=>$categorias]);
   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategoria $subcategoria)
    {
        $subcategoria = Subcategoria::find($request->id);
        $subcategoria->categoria_id = $request->categoria_id;
        $subcategoria->nome = $request->nome;
        $subcategoria->save();
        return redirect(route('subcategoria_index'))->with('msg', 'Subcategoria Editada com sucesso!');;  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategoria  $subcategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Subcategoria::destroy($request->id_delete);
        return redirect(route('subcategoria_index'));
    }
}
