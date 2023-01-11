<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function create(){
        $data = request()->validate([
            'property_id' => ['required','max:15'],
            'payment' => ['required','max:15'],
            'amount' => ['required','max:15'],
        ]);
        auth()->user()->carts()->create($data);

        Session::flash('cart-created', 'Item added to cart');
        return back();

    }

    

    public function delete(Cart $cart){
        $cart->delete();
        Session::flash('cart-deleted', 'Item removed from cart');
        return back();
    }
    // public function remove(Cart $cart){
    //     $cart->delete();
    //     Session::flash('cart-deleted', 'Item Removed');
    //     return back();
    // }

    public function view($id){
        $cart = Cart::limit(1)->get();
        $cartitem = Cart::where('user_id', $id)->get();
        $total = Cart::where('user_id', $id)->sum('amount');
        return view('home.cart', ['cart'=>$cart,'cartitem'=>$cartitem,'total'=>$total]);
    }
}
