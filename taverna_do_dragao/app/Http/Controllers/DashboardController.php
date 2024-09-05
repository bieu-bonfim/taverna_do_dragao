<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(Authenticate::class);
    }

    public function index()
    {
        $user_id = auth()->user()->user_id;
        $user = auth()->user();

        return view('dashboard.index')->with(compact('user'));
    }
}
