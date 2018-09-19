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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/categorias', 'CategoriaController@index')->name('categoria_index');;
Route::get('/admin/categorias/create', 'CategoriaController@create')->name('categoria_create');;
Route::post('/admin/categorias/store', 'CategoriaController@store')->name('categoria_store');
Route::get('/admin/categorias/edit', 'CategoriaController@edit')->name('categoria_edit');
Route::get('/admin/categorias/update', 'CategoriaController@update')->name('categoria_update');


Route::get('/admin/subcategorias', 'SubcategoriaController@index')->name('subcategoria_index');;
Route::get('/admin/subcategorias/create', 'SubcategoriaController@create')->name('subcategoria_create');;
Route::post('/admin/subcategorias/store', 'SubcategoriaController@store')->name('subcategoria_store');
Route::get('/admin/subcategorias/edit', 'SubcategoriaController@edit')->name('subcategoria_edit');
Route::get('/admin/subcategorias/update', 'SubcategoriaController@update')->name('subcategoria_update');

Route::get('/admin/produtos', 'ProdutoController@index')->name('produto_index');;
Route::get('/admin/produtos/create', 'ProdutoController@create')->name('produto_create');;
Route::post('/admin/produtos/store', 'ProdutoController@store')->name('produto_store');
Route::get('/admin/produtos/edit', 'ProdutoController@edit')->name('produto_edit');
Route::get('/admin/produtos/update', 'ProdutoController@update')->name('produto_update');

