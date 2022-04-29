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

        $alert = array(
            'message' => 'success add to cart',
            'alert-type' => 'success',
        );

        return redirect()->route('userViewMenu')->with('$alert');
        
    }
    

    public function getCart() {
        if (!Session::has('cart')) {
            return view('ManageCart.userViewCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $menus=$cart->items;
        $totalPrice=$cart->totalPrice;
        return view('ManageCart.userViewCart', compact('menus','totalPrice'));
    }


    public function userCheckout(){

        return view('ManageCheckOut.checkoutOut');
    }

}
