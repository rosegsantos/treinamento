<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
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
            'email' => 'required|email|max:255',
            'senha' => 'required'
        ]);

        $credentials = ['email'=>$request->email,'password'=>$request->senha];
        $lembrar = $request->lembrar; 
        if(Auth::attempt($credentials)){
            return redirect()->intended('painel');
        }else{
            return redirect()->back()->with('msg',"Acesso negado com estas credenciais");
        }

   }

}
