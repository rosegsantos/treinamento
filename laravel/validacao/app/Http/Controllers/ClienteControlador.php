<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$request->validate([
            'nome' => 'required|min:3|max:50|unique:clientes',
            'idade' => 'required',
            'endereco' => 'required|min:5',
            'email' => 'required|email'
        ], $mensagens);*/

        $regras = [
            'nome' => 'required|min:3|max:50|unique:clientes',
            'idade' => 'required',
            'endereco' => 'required|min:5',
            'email' => 'required|email'
        ];

        $mensagens = [
            'required' => 'O atributo :attribute é obrigatório',
            'nome.required' => 'O nome é requerido',
            'nome.min' => 'É necessário no mínimo 3 caracteres no nome',

            'email.required' => 'Digite o endereço de e-mail',
            'email.email' => 'Digite um endereço de e-mail válido'
        ];

        $request->validate($regras, $mensagens);

        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->endereco = $request->input('endereco');
        $cliente->email = $request->input('email');
        $cliente->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
