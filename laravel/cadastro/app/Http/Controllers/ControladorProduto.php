<?php

namespace App\Http\Controllers;

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
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
