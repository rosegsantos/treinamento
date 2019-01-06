<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Routing\Controller;


class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function painel(){
        return view('auth.painel');
    }

    public function login(Request $request){

        $request->validate([
            'login' => 'required|max:10',
            'senha' => 'required'
        ]);

        $credentials = ['login'=>$request->login,'password'=>$request->senha,'ativo'=>'S'];


        $lembrar = $request->lembrar;
        if(Auth::attempt($credentials)){
            return redirect()->intended('painel');
            //return view('auth.painel');

        }else{
            return redirect()->back()->with('msg',"Acesso negado com estas credenciais");
        }

    }

}
