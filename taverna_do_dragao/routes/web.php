<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/cardapio', [MenuController::class, 'listItems']);

// Route::get('/menu/item={itemId}', [MenuController::class, 'getItem']);

// Route::get('/menu/newItem', [MenuController::class, 'newItem']);

// Route::post('/menu/storeItem', [MenuController::class, 'storeItem']);

// Route::get('/menu/type={foodType}', [MenuController::class, 'getItemsByType']);


Route::controller(MenuController::class)->group(function (){
    Route::get('/cardapio', 'index')->name('taverna.menu.menu');
    // Route::post('/reservation', 'store')->name('taverna.reservation.store');

});

Route::controller(ReservationController::class)->group(function (){
    Route::get('/reservas', 'create')->name('taverna.reservation.create');
    Route::post('/reservation', 'store')->name('taverna.reservation.store');

});

Route::get('/carrinho-de-compras', [ShoppingCartController::class, 'create']);

Route::controller(LoginController::class)->group(function (){
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login/save', 'store')->name('login.store');
    Route::get('/logout', 'logout')->name('login.logout')->middleware('auth');


});

Route::controller(UserController::class)->group(function (){
    Route::get('/cadastrar', 'index')->name('user.index');
    Route::post('/signup/save', 'store')->name('user.store');

});

Route::controller(DashboardController::class)->group(function (){
    Route::get('/dashboard', 'index')->name('dashboard.index')->middleware('auth');
    Route::get('/dashboard/gestao-comandas', 'indexOrder')->name('dashboard.order.index')->middleware('auth');
    Route::get('/dashboard/criar-comanda', 'createOrder')->name('dashboard.order.create')->middleware('auth');
    Route::post('/dashboard/order/create', 'storeOrder')->name('dashboard.order.store')->middleware('auth');
    Route::get('/dashboard/comanda/{id}', 'viewOrder')->name('dashboard.order.viewOrder')->middleware('auth');
    
    Route::get('/dashboard/gestao/cardapio', 'indexMenu')->name('dashboard.menu.index')->middleware('auth');
    Route::get('/dashboard/gestao/cardapio/criar', 'createMenu')->name('dashboard.menu.create')->middleware('is_admin');
    Route::post('/dashboard/gestao/cardapio/create', 'storeMenu')->name('dashboard.menu.store')->middleware('is_admin');
    Route::delete('/dashboard/gestao/cardapio/delete/{id}', 'deleteProduct')->name('dashboard.menu.deleteProduct')->middleware('is_admin');
    Route::get('/dashboard/gestao/cardapio/editar/{id}', 'editMenu')->name('dashboard.menu.edit')->middleware('is_admin');
    Route::put('/dashboard/gestao/cardapio/edit/{id}', 'updateMenu')->name('dashboard.menu.update')->middleware('is_admin');


    Route::get('/dashboard/gestao/comanda/editar/{id}', 'indexEdit')->name('dashboard.order.edit')->middleware('auth');
    Route::put('/dashboard/gestao/comanda/update/{id}', 'updateOrder')->name('dashboard.order.update')->middleware('auth');
    Route::delete('/dashboard/gestao/comanda/delete/{id}', 'deleteOrder')->name('dashboard.order.delete')->middleware('auth');


    Route::get('/dashboard/gestao/comanda/editar/produto/{id}', 'indexAddProduct')->name('dashboard.order.addProduct')->middleware('auth');
    Route::post('/dashboard/gestao/comanda/update/produto/{id}', 'updateOrderProduct')->name('dashboard.order.updateOrderProduct')->middleware('auth');

    Route::get('/dashboard/gestao/reserva', 'indexReservation')->name('dashboard.reservation.index')->middleware('auth');
    Route::get('/dashboard/gestao/reserva/editar/{id}', 'editReservation')->name('dashboard.reservation.edit')->middleware('auth');
    Route::put('/dashboard/gestao/reserva/update/{id}', 'updateReservation')->name('dashboard.reservation.update')->middleware('auth');
    Route::delete('/dashboard/gestao/reserva/delete/{id}', 'deleteReservation')->name('dashboard.reservation.delete')->middleware('auth');
});

Route::controller(ProfileController::class)->group(function (){
    Route::get('/dashboard/perfil/editar', 'index')->name('dashboard.profile.index')->middleware('auth');
    Route::put('/dashboard/perfil/update', 'update')->name('dashboard.profile.update')->middleware('auth');

    
});


