<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function store(Request $request)
    {
        error_log("entrou");
        $teste = Auth::attempt($request->only('email', 'password'));
        error_log($teste);
        if (!Auth::attempt($request->only('email', 'password'))) {
            return redirect()->back()
                ->withErrors('Usuário ou senha inválidos!');
        }
        return to_route('dashboard.index');
    }

    public function logout()
    {
        Auth::logout();
        return to_route('login.index');
    }

    // public function store(Request $request){
    //     if(!Auth::attempt($request->only('email', 'password'))){
    //         return redirect()->back()->withErrors('E-mail ou senha inválidos');
    //     }
    //     return redirect("/times");

    // }
    // public function logout(){
    //     Auth::logout();
    //     return to_route('login');
    // }
}
