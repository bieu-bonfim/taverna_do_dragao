<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;

class MenuController extends Controller
{
    public function listItems()
    {
        //
        $items = Item::query()->orderBy('name')->get();
        error_log('Some message here.');
        error_log($items);

        $itemsTest = [
            'Atlético',
            'Cruzeiro',
            'Flamengo',
            'Fluminense',
            'Teste',
            'Oi',
        ];
        return view('taverna.menu.menu', compact('items'));
    }

    public function index()
    {
        $drinks = Product::where('typeFood', 'drink')->orderBy('name')->get();
        $servings = Product::where('typeFood', 'serving')->orderBy('name')->get();
        $plates = Product::where('typeFood', 'plate')->orderBy('name')->get();
        $desserts = Product::where('typeFood', 'dessert')->orderBy('name')->get();

        return view('taverna.menu.menu', compact('servings', 'drinks', 'plates', 'desserts'));
    }

    public function newItem()
    {
        return view('taverna.newItem');
    }

    public function storeItem(Request $request)
    {
        $item = new Item();
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->description = $request->input('description');
        $item->typeFood = $request->input('typeFood');
        $item->save();
        return redirect('/menu');
    }

    public function getItemsByType($typeFood)
    {
        $items = Item::where('typeFood', $typeFood)->orderBy('name')->get();
        return view('taverna.menuTypeFood', compact('items', 'typeFood'));
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

        $product = Product::findOrFail($request->id);

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


    public function deleteProduct(Request $request)
    {
        Product::destroy($request->id);
        session()->flash('message', "Produto deletado com sucesso!");
        return to_route('dashboard.menu.index');
    }
}
