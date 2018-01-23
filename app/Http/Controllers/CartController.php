<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

use App\Product;
use App\ProductImage;
use Illuminate\Session\Store;
use Session;
use Auth;
use App\CartDatabase;


class CartController extends Controller
{
    public function postCart($id,Request $request)
    {
            $rules = ['quantity' => 'required|not_in:Select Quantity'];
            $customMessages = ['quantity.required' => 'You must select a quantity',
                'quantity.not_in' => 'You must select a quantity'];
            $this->validate($request, $rules, $customMessages);

                $product = Product::with('productimages')->where('id', $id)->first();
                $oldCart = Session::has('cart') ? Session::get('cart') : null;
                $cart = new Cart($oldCart);
                $quantity = $request->input('quantity');
                $cart->add($product, $product->id, $quantity);
                $request->session()->put('cart', $cart);
                return view('checkout.cart', ['products' => $cart->items, 'quantity' => $cart->totalQuantity, 'taxAmount' => $cart->taxAmount, 'totalPrice' => $cart->totalPrice, 'totalAfterTax' => $cart->totalAfterTax]);
    }

    public function getCart(){
            if (!Session::has('cart')) {
                return view('checkout.getcart', ['products' => null]);
            }
            $oldcart = Session::get('cart');
            $cart = new Cart($oldcart);
            return view('checkout.getcart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice,'quantity'=>$cart->totalQuantity,'taxAmount'=>$cart->taxAmount,'totalAfterTax'=>$cart->totalAfterTax]);
        }


    public function updateCart($id,$quantity,Request $request)
    {
            $product = Product::where('id', $id)->first();
            $cart = Session::get('cart');
            //$quantity=$request->input('quantity');
            $cart->removeProduct($id, $product,$quantity);
            $cartUpdated=new Cart($cart);
            $request->session()->put('cart',$cartUpdated);
            return view('checkout.getcart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice, 'quantity' => $cart->totalQuantity,'totalAfterTax'=>$cart->totalAfterTax,'taxAmount'=>$cart->taxAmount]);


    }

  /*  public function getCart($id,Request $request)
    {
        $product = Product::with('productimages')->where('id', $id)->first();
        $quantity=$request->input('quantity');
        var_dump($quantity);
        return view('checkout.cart', ['product' => $product,'quantity'=>$quantity]);
    }*/
}
