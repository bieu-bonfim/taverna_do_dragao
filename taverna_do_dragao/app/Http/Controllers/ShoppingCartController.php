<?php

namespace App\Http\Controllers;

class ShoppingCartController extends Controller
{
    public function create()
    {
        return view('taverna.shopping-cart.shopping-cart');
    }

}
