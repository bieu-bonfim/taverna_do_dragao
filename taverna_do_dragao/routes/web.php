<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ShoppingCartController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('taverna.index');
});

Route::get('/login', function () {
    return view('taverna.login');
});

Route::get('/register', function () {
    return view('taverna.register');
});

Route::get('/cardapio', [MenuController::class, 'listItems']);

Route::get('/menu/item={itemId}', [MenuController::class, 'getItem']);

Route::get('/menu/newItem', [MenuController::class, 'newItem']);

Route::post('/menu/storeItem', [MenuController::class, 'storeItem']);

Route::get('/menu/type={foodType}', [MenuController::class, 'getItemsByType']);

Route::get('/reservas', [ReservationController::class, 'create']);

Route::get('/carrinho-de-compras', [ShoppingCartController::class, 'create']);