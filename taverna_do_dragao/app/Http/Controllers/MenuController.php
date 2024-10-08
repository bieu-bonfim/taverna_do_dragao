<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class menuController extends Controller
{
    public function listItems(){
        //
        $items = Item::query()->orderBy('name')->get();

        return view('taverna.menu', compact('items'));
    }

    public function getItem($itemId)
    {
        $menuItem = Item::findOrFail($itemId);
        return view('taverna.menuItem', compact('menuItem'));
    }

    public function newItem()
    {
        return view('taverna.newItem');
    }

    public function storeItem(Request $request){
        $item = new Item();
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->description = $request->input('description');
        $item->typeFood = $request->input('typeFood');
        $item->save();
        return redirect('/menu');
    }

    public function getItemsByType($typeFood){
        $items = Item::where('typeFood', $typeFood)->orderBy('name')->get();
        return view('taverna.menuTypeFood', compact('items', 'typeFood'));
    }
}
