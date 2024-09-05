<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ShoppingCartController extends Controller
{
    public function create()
    {
        return view('taverna.shopping-cart.shopping-cart');
    }

    public function addToCart($id)
    {
        $product = Product::find($id);
        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produto adicionado ao carrinho!');
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Produto removido do carrinho!');
    }

    public function viewCart()
    {
        $cart = session()->get('cart');
        return view('cart.index', compact('cart'));
    }

    public function add1Product($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Produto removido do carrinho!');
    }

    public function subtract1Product($id)
    {
        $cart = session()->get('cart');

        if(isset($cart[$id])) {
            if($cart[$id]['quantity'] <= 1){
                unset($cart[$id]);
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Produto removido do carrinho!');
            }
            $cart[$id]['quantity'] -= 1;
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Produto removido do carrinho!');
    }
}
