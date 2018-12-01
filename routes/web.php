<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//index
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
Route::get('/', 'HomeController@index')->name('index');

// loja
Route::any('/loja', 'HomeController@shop')->name('shop');;

Route::get('/produto/{produto_id}', 'HomeController@especificacoes_produtos_json');

//comentarios
Route::get('/comentario/{produto_id}', 'ComentarioController@index');
Route::post('/comentario/enviar_comentario', 'ComentarioController@store');


//usuario
Route::get('/usuario', 'UsuarioController@index')->name('usuario');
Route::get('/usuario/produtos_table', 'UsuarioController@json_produtos_datatable')->name('produtos_table');
Route::post('/usuario/sugestao', 'UsuarioController@enviar_sugestao')->name('sugestao');
//admin
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/notificacoes', 'NotificacoesController@notificacoes')->name('notificacoes');
Route::get('/alterar_produto/{id}', 'NotificacoesController@alterar_produto')->name('alterar_produto');
Route::post('/update_alterar_produto', 'NotificacoesController@alterar_produto_update')->name('update_sugestao');

//CRUD categoria
Route::get('/admin/categorias', 'CategoriaController@index')->name('categoria_index');
Route::get('/admin/categorias/create', 'CategoriaController@create')->name('categoria_create');
Route::post('/admin/categorias/store', 'CategoriaController@store')->name('categoria_store');
Route::get('/admin/categorias/edit/{id}', 'CategoriaController@edit')->name('categoria_edit');
Route::post('/admin/categorias/update', 'CategoriaController@update')->name('categoria_update');
Route::post('/admin/categorias/delete/', 'CategoriaController@destroy')->name('categoria_delete');

//CRUD subcategoria
Route::get('/admin/subcategorias', 'SubcategoriaController@index')->name('subcategoria_index');
Route::get('/admin/subcategorias/create', 'SubcategoriaController@create')->name('subcategoria_create');
Route::post('/admin/subcategorias/store', 'SubcategoriaController@store')->name('subcategoria_store');
Route::get('/admin/subcategorias/edit/{id}', 'SubcategoriaController@edit')->name('subcategoria_edit');
Route::post('/admin/subcategorias/update', 'SubcategoriaController@update')->name('subcategoria_update');
Route::post('/admin/subcategorias/delete/', 'SubcategoriaController@destroy')->name('subcategoria_delete');
//CRUD loja

Route::get('/admin/lojas', 'LojaController@index')->name('loja_index');
Route::get('/admin/lojas/create', 'LojaController@create')->name('loja_create');
Route::post('/admin/lojas/store', 'LojaController@store')->name('loja_store');
Route::get('/admin/lojas/edit/{id}', 'LojaController@edit')->name('loja_edit');
Route::post('/admin/lojas/update', 'LojaController@update')->name('loja_update');
Route::post('/admin/lojas/delete/', 'LojaController@destroy')->name('loja_delete');

//CRUD produto
Route::get('/admin/produtos', 'ProdutoController@index')->name('produto_index');
Route::get('/admin/produtos/create', 'ProdutoController@create')->name('produto_create');
Route::post('/admin/produtos/store', 'ProdutoController@store')->name('produto_store');
Route::get('/admin/produtos/edit/{id}', 'ProdutoController@edit')->name('produto_edit');
Route::post('/admin/produtos/update', 'ProdutoController@update')->name('produto_update');
Route::post('/admin/produtos/delete/', 'ProdutoController@destroy')->name('produto_delete');

