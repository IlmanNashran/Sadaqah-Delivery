<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function viewOrder()
    {
        $orders = Order::orderBy('id','DESC')->get();
        return view('ManageOrder.adminViewOrder',compact('orders'));
    }

    public function changeStatus(Request $request,$id)
    {
        $order = Order::find($id);
        Order::where('id',$id)->update(['status'=> $request->status]);
        return back();
    }


}
