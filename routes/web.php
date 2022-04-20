<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;


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
    return view('auth.login');
});

//for login authenticcation
Auth::routes();

//for view the menu page
Route::get('/userViewMenu', [MenuController::class, 'userViewMenu'])->name('userViewMenu');


//route for filter category menu in menu page
Route::get('/category',[MenuController::class, 'userViewCategoryMenu'])->name('userViewCategoryMenu');

//route to User profile page
Route::get('/ProfileUser', [ProfileController::class, 'editProfileUser'])->name('profileUser')->middleware('auth');






//route for adding the cart
Route::get('/adding_Mycart/{id}',[CartController::class,'getAddToCart'])->name('userAddCart');

//route to User cart page 
Route::get('/MyCart',[CartController::class,'getCart'])->name('userviewCart');



//Route for admin
Route::group(['middleware' => ['auth','admin']], function () {
    
Route::get('/home', [HomeController::class, 'adminView']);
Route::get('/ManageMenu', [MenuController::class, 'menulist'])->name('menu.menulist');
Route::get('/ManageMenu/create', [MenuController::class, 'create'])->name('menu.create');
Route::post('/ManageMenu/store', [MenuController::class, 'store'])->name('menu.store');
Route::get('/ManageMenu/{id}/edit', [MenuController::class, 'edit'])->name('menu.edit');
Route::put('/ManageMenu/{id}/update', [MenuController::class, 'update'])->name('menu.update');
Route::delete('/ManageMenu/{id}', [MenuController::class,'destroy'])->name("menu.destroy");

//display all order and admin can change status
Route::get('/ManageOrder', [OrderController::class, 'viewOrder'])->name('order.orderlist');
Route::post('/ManageOrder/{id}/status', [OrderController::class, 'changeStatus'])->name('order.status');

//display all customers for admin
Route::get('/ManageProfile', [MenuController::class, 'viewuser'])->name('profile.profilelist');



});