<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Cart;
use Session;
use Stripe\Stripe;
use Stripe\Charge;

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


    public function addDeliveryTo(Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $name=$request->name;
        $phoneNumber=$request->phonenumber;
        $address=$request->address;
        $cart->addDeliveryTo( $name, $phoneNumber, $address);

        $request->session()->put('cart', $cart);

        return redirect()->route('userCheckout')->with('$alert');
       
    }
    

    public function getCart() {
        if (!Session::has('cart')) {
            $totalPrice=0;
            return view('ManageCart.userViewCart',compact('totalPrice'));

        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $menus=$cart->items;
        $totalPrice=$cart->totalPrice;
        return view('ManageCart.userViewCart', compact('menus','totalPrice'));
    }


    public function userCheckout(){
        
        if (!Session::has('cart')) {
            return view('ManageCart.userViewCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $menus=$cart->items;
        $totalPrice=$cart->totalPrice;
        
        return view('ManageCheckOut.checkOut',compact('menus','totalPrice'));
    }


    public function postCheckOutPayment(Request $request){

        if (!Session::has('cart')){
            return view('ManageCart.userViewCart');
        }

        $oldCart=Session::get('cart');
        $cart=new Cart($oldCart);

        Stripe::setApiKey('sk_test_51L5JbCGb9WyQ8hA5u8bTblPR2KnspA1tWz63wD0iUwO1oRFu0vZxrItgmkWC1QPbNPZnvVN8y1LZXm8KC6jaUyOg00hulF3wR8');
        try{
            Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "rm",
                //"source" => $request->input('stripeToken'), // obtained with Stripe.js
                "source" => "tok_visa",
                "description" => "Test Charge"
            ));

        }  catch (\Exception $e) {
            return redirect()->route('postCheckOutPayment')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('userViewMenu')->with('success', 'Successfully purchased products!');

    }
}
