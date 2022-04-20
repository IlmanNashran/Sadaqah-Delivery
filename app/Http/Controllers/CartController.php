<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Cart;
use Session;


use Illuminate\Http\Request;

class CartController extends Controller
{
    
    public function getAddToCart(Request $request, $id) {
        $menu = Menu::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($menu, $menu->id);
        
        $request->session()->put('cart', $cart);

       
        return redirect()->route('userViewMenu');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('ManageCart.userViewCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        
        return view('ManageCart.userViewCart', ['menus' => $cart->items, 'totalPrice' => $cart->totalPrice,]);
    }
}
