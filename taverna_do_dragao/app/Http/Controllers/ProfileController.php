<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('dashboard.profile.index');
    }
    public function update(Request $request)
    {
        error_log("ue2");

        $user_id = auth()->user()->id;

        $username = $request->input('username');
        $email = $request->input('email');

        DB::update("update users set username = '$username', email = ' $email' where id = $user_id");

        // $user = User::findOrFail($user_id );



        // $user->save();
        // error_log("ue");
        return to_route("dashboard.index");
    }
}
