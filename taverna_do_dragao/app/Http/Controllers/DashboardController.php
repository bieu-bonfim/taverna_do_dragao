<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(Authenticate::class);
    }

    public function index()
    {
        return view('dashboard.index');
    }
    public function indexOrder()
    {
        $orders = Order::query()->orderBy('tableNumber')->get();
        error_log($orders);
        return view('dashboard.order.index')->with(compact('orders'));
    }
    public function createOrder()
    {

        return view('dashboard.order.create');
    }
    public function storeOrder(OrderRequest $request)
    {
        $user_id = auth()->user()->id;

        $request->validated();

        $order = new Order();
        $order->customerName = $request->input('customerName');
        $order->customerPhone = $request->input('customerPhone');
        $order->tableNumber = $request->input('tableNumber');
        $order->user_id = $user_id;

        if ($order->save()) {
            return to_route(("dashboard.order.index"))->with('message', "A comanda foi cadastrada com sucesso");
        }
        return to_route("dashboard.index");
    }

    public function viewOrder(Request $request)
    {
        $order = Order::findOrFail($request->id);
        return view('dashboard.order.view')->with(compact('order'));
    }

    public function indexMenu()
    {
        $products = Product::query()->orderBy('name')->get();
        return view('dashboard.menu.index')->with(compact('products'));
    }
    public function createMenu()
    {
        return view('dashboard.menu.create');
    }
    public function storeMenu(ProductRequest $request)
    {
        $user_id = auth()->user()->id;

        $request->validated();

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->typeFood = $request->input('typeFood');
        $product->totalQuantity = $request->input('totalQuantity');
        $product->user_id = $user_id;

        if ($product->save()) {
            return to_route(("dashboard.menu.index"))->with('message', "O produto foi cadastrado com sucesso");
        }
        return to_route("dashboard.index");
    }
}
