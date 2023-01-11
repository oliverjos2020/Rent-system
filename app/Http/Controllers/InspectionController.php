<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Inspection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class InspectionController extends Controller
{
    public function inspection(){
        $data = request()->validate([
            'property_id' => ['required','max:15'],
            'payment' => ['required','max:15'],
            'amount' => ['required','max:15'],
        ]);
        auth()->user()->inspections()->create($data);

        $user = Auth()->User()->id;
        // $cart = Cart::limit(1)->get();
        $Inspectionitem = Inspection::where('user_id', $user)->get();
        // $total = Cart::where('user_id', $id)->sum('amount');
        // return view('home.inspection-cart', ['Inspectionitem'=>$Inspectionitem]);
        

        Session::flash('inspection-created', '');
        // return view('home.cart', ['cart'=>$cart,'cartitem'=>$cartitem,'total'=>$total]);
        return back();
    }

    public function view($id){
        $cart = Cart::limit(1)->get();
        $Inspectionitem = Inspection::where('user_id', $id)->get();
        // $total = Cart::where('user_id', $id)->sum('amount');
        return view('home.inspection-cart', ['cart'=>$cart,'Inspectionitem'=>$Inspectionitem]);
    }

    public function delete(Inspection $inspection){
        $inspection->delete();
        Session::flash('cart-deleted', 'Item Removed');
        return back();
    }
}
