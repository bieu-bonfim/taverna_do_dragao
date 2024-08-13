<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
    public function listItems(){
        //
        $items = [
            'Burguer',
            'Fries',
            'Pizza',
            'Onion Rings'
        ];

        return view('taverna.menu', compact('items'));
    }

    public function getItem($itemName)
    {
        return view('taverna.menuItem', compact('itemName'));
    }
}
