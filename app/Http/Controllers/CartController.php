<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request)
    {
        // dd($request->all());
        $product = Product::find($request->productId);
        // dd($product->price);
        Cart::add($product->id, $product->name, $product->price, $request->quantity, array());
        // dd(Cart::getContent());
        return back()->with('success',"$product->name has successfully beed added to the shopping cart!");;
    }

    public function cart(){
        $params = [
            'title' => 'Shopping Cart Checkout',
        ];
// dd(Cart::getContent());
        return view('home.cart')->with($params);
    }

    public function clear(){
        Cart::clear();

        return back()->with('success',"The shopping cart has successfully beed added to the shopping cart!");;
    }
}
