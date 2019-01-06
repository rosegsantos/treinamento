<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App\Produtos;

class ControladorProduto extends Controller
{
    public function index()
    {
        $prods = Produtos::all();


        return view('produtos', compact('prods'));
    }

    public function create()
    {
        $cats = Categoria::all();
        return view('novoproduto', compact('cats'));
    }

    public function store(Request $request)
    {
        $prod = new Produtos();
        $prod->nome = $request->input('nomeProduto');
        $prod->estoque = $request->input('estoqueProduto');
        $prod->preco = $request->input('precoProduto');
        $prod->categoria_id = $request->input('categoriaProduto');
        $prod->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        $prod = Produtos::find($id);
        $cats = Categoria::all();

        if(isset($prod)){
            return view('editarproduto', compact('prod','cats'));
        }
        return redirect('/produtos');
    }

    public function update(Request $request, $id)
    {
        $prod = Produtos::find($id);
        if(isset($prod)){
            $prod->nome = $request->input('nomeProduto');
            $prod->estoque = $request->input('estoqueProduto');
            $prod->preco = $request->input('precoProduto');
            $prod->categoria_id = $request->input('categoriaProduto');
            $prod->save();
        }
        return redirect('/produtos');
    }

    public function destroy($id)
    {
        $prod = Produtos::find($id);
        if(isset($prod)){
            $prod->delete();
        }
        return redirect('/produtos');
    }
}
