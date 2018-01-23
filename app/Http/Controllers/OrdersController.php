<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Cart;
use App\Orders;

class OrdersController extends Controller
{
    public function order(Request $request){
        $usertoken=$request->input('stripeToken');
        $userEmail=$request->input('stripeEmail');
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        //$order=new Orders();
        $user=Auth::user();
        foreach ($cart->items as $item) {
            $order=new Orders();
            $order->product_id=$item['item']->id;
            $order->user_id=$user->id;
             $order->save();
            //\DB::table('orders')->insert(['product_id'=>$item->id,'user_id'=>$user->id]);
        }
        $request->session()->forget('cart');
        return view('Orders.orders',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice,'quantity'=>$cart->totalQuantity,'taxAmount'=>$cart->taxAmount,'totalAfterTax'=>$cart->totalAfterTax]);


    }

    public function getorders(){
        $user=Auth::user();

        //$products=Orders::all()->where('user_id',$user->id);
        $oldcart = Session::get('cart');
        $cart = new Cart($oldcart);
        //dd($products);
        //foreach ($products as $product) {

            //$actualproduct = Product::with('productimages')->where('id', $product->product_id);
        //}

        //    return view('Orders.getorders',['products'=>$products]);


        //dd($actualproduct);
        return view('Orders.getorders',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice,'quantity'=>$cart->totalQuantity,'taxAmount'=>$cart->taxAmount,'totalAfterTax'=>$cart->totalAfterTax]);

    }
}
