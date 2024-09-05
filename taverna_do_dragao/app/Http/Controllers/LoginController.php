<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function store(LoginRequest $request)
    {
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
}
