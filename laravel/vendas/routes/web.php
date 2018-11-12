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

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', function () {
    $cats = DB::table('categorias')->get();

    // array de objetos
    foreach ($cats as $cat) {
        echo "id: " . $cat->id . "; ";
        echo "nome: " . $cat->nome . "<br>";
    }

    echo "<hr>";

    $nomes = DB::table('categorias')->pluck('nome');
    foreach ($nomes as $nome) {
        echo "$nome <br>";
    }

    echo "<hr>";

    $cats = DB::table('categorias')->where('id', 2)->get();
    foreach ($cats as $cat){
        echo "id: " . $cat->id . "; ";
        echo "nome: " . $cat->nome . "<br>";
    }

    echo "<hr>";

    $cats = DB::table('categorias')->where('id', 2)->first();
    echo "id: " . $cat->id . "; ";
    echo "nome: " . $cat->nome . "<br>";

    echo "<hr>";

    echo "<p>retorna um array utilizando like</p>";
    $cats = DB::table('categorias')->where('nome', 'like', '%p%')->get();
    foreach ($cats as $cat){
        echo "id: " . $cat->id . "; ";
        echo "nome: " . $cat->nome . "<br>";
    }

    echo "<p>setenças lógicas</p>";
    $cats = DB::table('categorias')->where('id', 1)->orWhere('id', 2)->get();
    foreach ($cats as $cat){
        echo "id: " . $cat->id . "; ";
        echo "nome: " . $cat->nome . "<br>";
    }

    echo "<p>intervalos</p>";
    $cats = DB::table('categorias')->whereBetween('id', [1,2])->get();
    foreach ($cats as $cat){
        echo "id: " . $cat->id . "; ";
        echo "nome: " . $cat->nome . "<br>";
    }

    echo "<p>intervalos</p>";
    $cats = DB::table('categorias')->whereNotBetween('id', [1,2])->get();
    foreach ($cats as $cat){
        echo "id: " . $cat->id . "; ";
        echo "nome: " . $cat->nome . "<br>";
    }

    echo "<p>conjunto de dados</p>";
    $cats = DB::table('categorias')->whereIn('id', [1,3,4])->get();
    foreach ($cats as $cat){
        echo "id: " . $cat->id . "; ";
        echo "nome: " . $cat->nome . "<br>";
    }

    echo "<p>conjunto de dados</p>";
    $cats = DB::table('categorias')->whereNotIn('id', [1,3,4])->get();
    foreach ($cats as $cat){
        echo "id: " . $cat->id . "; ";
        echo "nome: " . $cat->nome . "<br>";
    }

    echo "<p>setenças lógicas</p>";
    $cats = DB::table('categorias')->where([
        ['id', 1],
        ['nome','roupas']
    ])->get();
    foreach ($cats as $cat){
        echo "id: " . $cat->id . "; ";
        echo "nome: " . $cat->nome . "<br>";
    }

    echo "<p>ordenando por nome</p>";
    $cats = DB::table('categorias')->orderBy('nome')->get();
    foreach ($cats as $cat){
        echo "id: " . $cat->id . "; ";
        echo "nome: " . $cat->nome . "<br>";
    }

    echo "<p>ordenando por nome (descrescente)</p>";
    $cats = DB::table('categorias')->orderBy('nome', 'desc')->get();
    foreach ($cats as $cat){
        echo "id: " . $cat->id . "; ";
        echo "nome: " . $cat->nome . "<br>";
    }

});

Route::get('/novascategorias', function(){
   $id = DB::table('categorias')->insertGetId(
       // ['nome' => 'Cama mesa e banho'],
       // ['nome' => 'Informática'],
       // ['nome' => 'Cozinha']
       ['nome' => 'Carros']
   );

   echo "Novo ID = $id <br>";
});

Route::get('/atualizandocategorias', function(){
    $cat = DB::table('categorias')->where('id', 1)->first();
    echo "<p>Antes da Atualização</p>";
    echo "id: " . $cat->id . "; ";
    echo "nome: " . $cat->nome . "<br>";

    DB::table('categorias')->where('id', 1)
        ->update(['nome' => 'Roupas Infantis']);

    echo "<p>Depois da Atualização</p>";
    echo "id: " . $cat->id . "; ";
    echo "nome: " . $cat->nome . "<br>";

});


Route::get('/removendocategorias', function(){
    echo "<p>Antes da Remoção</p>";

    $cats = DB::table('categorias')->get();
    foreach ($cats as $cat) {
        echo "id: " . $cat->id. "; ";
        echo "nome: " . $cat->nome. "<br>";
    }

    echo "<hr>";

    //DB::table('categorias')->where('id', 1)->delete();
    DB::table('categorias')->whereNotIn('id', [1,2,3,4,5,6])->delete();


    echo "<p>Depois da Atualização</p>";
    $cats = DB::table('categorias')->get();
    foreach ($cats as $cat) {
        echo "id: " . $cat->id. "; ";
        echo "nome: " . $cat->nome. "<br>";
    }



});

