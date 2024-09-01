<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('user.index');
    }
    public function store(Request $request)
    {
        // $username = $request->input("username");
        // $email = $request->input("email");
        // $password = $request->input("password");
        // $hashPassword = Hash::make($password);
        // if(DB::insert('insert into users (username, email, password) values (?, ?, ?)', [$username, $email, $hashPassword ])){
        //     return to_route('login.index');
        // }

        $data = $request->except('_token');
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        Auth::login($user);
        return to_route('login.index');
    }
}
