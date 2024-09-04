<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
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
}
