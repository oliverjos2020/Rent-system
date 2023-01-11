<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Photo;
use App\Models\Category;
use App\Models\Location;
use App\Models\Inspection;
use App\Models\Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        //$user = auth()->user()->id;
        $cart = Cart::limit(1)->get();
        //$cart = Cart::where('user_id', $user)->limit(1)->get();
        $property = Property::paginate(9);
        $category = Category::all();
        $location = Location::all();
        
        return view('home', ['property'=>$property, 'category'=>$category, 'location'=>$location,'cart'=>$cart]);
    }

    public function listing(){
        $cart = Cart::limit(1)->get();
        $property = Property::paginate(6);
        $category = Category::all();
        $location = Location::all();
        return view('home.listing', ['property'=>$property, 'category'=>$category, 'location'=>$location,'cart'=>$cart]);
    }

    public function view($id){
        $user = Auth()->user()->id;
        $cart = Cart::where('user_id', $user)->get();
        $property = Property::findOrFail($id);
        $photo = Photo::where('property_id', $id)->get();
        $cartbtn = Cart::where('property_id', $id)->where('user_id', $user)->limit(1)->get();
        $inspectionbtn = Inspection::where('property_id', $id)->where('user_id', $user)->limit(1)->get(); 
        $category = Category::all();
        $location = Location::all();
        return view('home.single', [
            'photo'=>$photo,
            'property'=>$property, 
            'category'=>$category,
            'cart'=>$cart,
            'cartbtn'=>$cartbtn,
            'location'=>$location,
            'inspectionbtn'=>$inspectionbtn
        ]);
    }

    public function sort($id){
        $cart = Cart::limit(1)->get();
        $property = Property::where('category_id', $id)->paginate(12);
        $categoryname = Category::findOrFail($id);
        $category = Category::all();
        $location = Location::all();
        return view('home.sort-category', [
            'property'=>$property,
            'categoryname'=>$categoryname,
            'cart'=>$cart,
            'category'=>$category,
            'location'=>$location
        ]);
    }

    public function location($id){
        $cart = Cart::limit(1)->get();
        $property = Property::where('location_id', $id)->paginate(12);
        $title = Location::findOrFail($id);
        $category = Category::all();
        $location = Location::all();
        return view('home.location', [
            'property'=>$property,
            'title'=>$title,
            'cart'=>$cart,
            'category'=>$category,
            'location'=>$location
        ]);
    }
}
