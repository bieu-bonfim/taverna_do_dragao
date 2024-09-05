<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function deleteOrder(Request $request)
    {
        Order::destroy($request->id);
        session()->flash('message', "Comanda deletada com sucesso!");
        return to_route('dashboard.order.index');
    }

    public function viewOrder(Request $request)
    {
        $order = Order::with('Product')->find($request->id);
        $totalPrice = 0;
        foreach ($order->Product as $product) {
            $totalPrice = $totalPrice + ((float) $product->price * $product->pivot->quantity);
        }
        return view('dashboard.order.view')->with(compact('order', 'totalPrice'));
    }

    public function updateOrder(Request $request)
    {
        $user_id = auth()->user()->id;

        $order = Order::findOrFail($request->id);
        $order->customerName = $request->input('customerName');
        $order->customerPhone = $request->input('customerPhone');
        $order->tableNumber = $request->input('tableNumber');
        $order->user_id = $user_id;

        $order->save();

        if ($order->save()) {
            return to_route('dashboard.order.index')->with('message', "A comanda foi editada com sucesso");;
        }
        return to_route("dashboard.index");
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
    
    public function indexAddProduct(Request $request)
    {
        $order = Order::findOrFail($request->id);
        $products = Product::query()->orderBy('name')->get();
        return view('dashboard.order.addProduct')->with(compact('products', 'order'));
    }

    public function indexEdit(Request $request)
    {
        $products = Product::query()->orderBy('name')->get();
        $order = Order::findOrFail($request->id);
        return view('dashboard.order.edit')->with(compact('products', 'order'));
    }
    public function updateOrderProduct(Request $request)
    {
        $product_id = $request->input('productId');
        $quantity = $request->input('quantity');
        $order_id = $request->id;

        $product = Product::findOrFail($product_id);

        $productName = $product->name;

        $order = Order::findOrFail($order_id);
        $productData = [
            $product_id => ['quantity' => $quantity, 'name' => $productName]
        ];
        $order->Product()->attach($productData);
        return to_route("dashboard.order.index");
    }

}
