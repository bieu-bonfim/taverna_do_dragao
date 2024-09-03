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
        // $order = Order::findOrFail($request->id);
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
    public function indexMenu()
    {
        $drinks = Product::where('typeFood', 'drink')->orderBy('name')->get();
        $servings = Product::where('typeFood', 'serving')->orderBy('name')->get();
        $plates = Product::where('typeFood', 'plate')->orderBy('name')->get();
        $desserts = Product::where('typeFood', 'dessert')->orderBy('name')->get();


        $products = Product::query()->orderBy('name')->get();
        return view('dashboard.menu.index')->with(compact('products', 'servings', 'drinks', 'plates', 'desserts'));
    }
    public function createMenu()
    {
        return view('dashboard.menu.create');
    }
    public function storeMenu(ProductRequest $request)
    {
        $user_id = auth()->user()->id;

        $request->validated();

        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('img'), $imageName);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->typeFood = $request->input('typeFood');
        $product->totalQuantity = $request->input('totalQuantity');
        $product->user_id = $user_id;
        $product->image = $imageName;

        if ($product->save()) {
            return to_route(("dashboard.menu.index"))->with('message', "O produto foi cadastrado com sucesso");
        }
        return to_route("dashboard.index");
    }

    public function editMenu(Request $request)
    {
        $product = Product::findOrFail($request->id);
        return view('dashboard.menu.edit')->with(compact('product'));
    }

    public function updateMenu(Request $request)
    {
        $user_id = auth()->user()->id;

        $product = product::findOrFail($request->id);

        $image = "";

        if(!!request()->image == true){
            $image = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('img'), $image );
        }
        else{
            $image = $product->image;
        }

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->totalQuantity = $request->input('totalQuantity');
        $product->image = $image;
        $product->typeFood = $request->input('typeFood');
        $product->user_id = $user_id;

        $product->save();

        if ($product->save()) {
            return to_route('dashboard.menu.index')->with('message', "O produto foi editado com sucesso");;
        }
        return to_route("dashboard.index");
    }

    public function indexEdit(Request $request)
    {
        $products = Product::query()->orderBy('name')->get();
        $order = Order::findOrFail($request->id);
        return view('dashboard.order.edit')->with(compact('products', 'order'));
    }

    public function indexAddProduct(Request $request)
    {
        $order = Order::findOrFail($request->id);
        $products = Product::query()->orderBy('name')->get();
        return view('dashboard.order.addProduct')->with(compact('products', 'order'));
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




        // $user_id = auth()->user()->id;   

        // $order = Order::findOrFail($request->id);
        // $order->customerName = $request->input('customerName');
        // $order->customerPhone = $request->input('customerPhone');
        // $order->tableNumber = $request->input('tableNumber');
        // $order->user_id = $user_id;

        // $order->save();

        // if ($order->save()) {
        //     return to_route('dashboard.order.index')->with('message', "A comanda foi editada com sucesso");;
        // }
        return to_route("dashboard.order.index");
    }
    public function deleteProduct(Request $request)
    {
        Product::destroy($request->id);
        session()->flash('message', "Produto deletado com sucesso!");
        return to_route('dashboard.menu.index');
    }
    public function deleteOrder(Request $request)
    {
        Order::destroy($request->id);
        session()->flash('message', "Comanda deletada com sucesso!");
        return to_route('dashboard.order.index');
    }
}
