<?php

namespace App\Http\Controllers;

use App\Loja;
use Illuminate\Http\Request;

class LojaController extends Controller
{
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
        $loja->slug = $request->slug;
        $loja->save();
        return redirect(route('loja_index'));  
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
        return redirect(route('loja_index'));  
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loja  $loja
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loja $loja)
    {
        //
    }
}
