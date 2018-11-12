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
    return view('pagina');
});

Route::get('/primeiraview', function (){
    return view('minhaview');
});

Route::get('/ola', function (){
    return view('minhaview')
        ->with('nome', 'João')
        ->with('sobrenome', 'Silva');
});

Route::get('/ola/{nome}/{sobrenome}', function ($nome, $sobrenome){
    /*
     * return view('minhaview')
        ->with('nome', $nome)
        ->with('sobrenome', $sobrenome);
    ou

    $parametros = ['nome'=>$nome, 'sobrenome'=>$sobrenome];
    return view('minhaview', $parametros);

    ou
    */

    return view('minhaview', compact('nome', 'sobrenome'));
});

Route::get('/email/{email}', function($email) {
    if(View::exists('email'))
        return view('email', compact('email'));
    else
        return  view('erro');
});


Route::get('/produtos','ProdutoControlador@listar');

Route::get('/secaoprodutos/{palavra}','ProdutoControlador@secaoprodutos');


Route::get('/mostraropcoes','ProdutoControlador@mostrar_opcoes');

Route::get('/opcoes/{opcao}', 'ProdutoControlador@opcoes');

Route::get('/loop/for/{n}', 'ProdutoControlador@loopfor');

Route::get('/loop/foreach', 'ProdutoControlador@loopforeach');




