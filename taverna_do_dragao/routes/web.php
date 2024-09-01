<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\UserController;
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

Route::controller(LoginController::class)->group(function (){
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login/save', 'store')->name('login.store');

});

Route::controller(UserController::class)->group(function (){
    Route::get('/cadastrar', 'index')->name('user.index');
    Route::post('/signup/save', 'store')->name('user.store');

});

Route::controller(DashboardController::class)->group(function (){
    Route::get('/dashboard', 'index')->name('dashboard.index')->middleware('auth');
    Route::get('/dashboard/gestao-comandas', 'indexOrder')->name('dashboard.order.index')->middleware('auth');
    Route::get('/dashboard/criar-comanda', 'createOrder')->name('dashboard.order.create')->middleware('is_admin');
    Route::post('/dashboard/order/create', 'storeOrder')->name('dashboard.order.store')->middleware('auth');
    Route::get('/dashboard/comanda/{id}', 'viewOrder')->name('dashboard.order.viewOrder')->middleware('auth');
    
    Route::get('/dashboard/gestao/cardapio', 'indexMenu')->name('dashboard.menu.index')->middleware('auth');
    Route::get('/dashboard/gestao/cardapio/criar', 'createMenu')->name('dashboard.menu.create')->middleware('auth');
    Route::post('/dashboard/gestao/cardapio/create', 'storeMenu')->name('dashboard.menu.store')->middleware('auth');


  

});
