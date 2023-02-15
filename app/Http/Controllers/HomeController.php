<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
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
        $post = post::paginate(3);
        $category = Category::all();
        $location = Location::all();

        return view('home', ['post'=>$post, 'category'=>$category, 'location'=>$location,'cart'=>$cart]);
    }

    public function listing(){
        $cart = Cart::limit(1)->get();
        $post = post::paginate(6);
        $category = Category::all();
        $location = Location::all();
        return view('home.listing', ['post'=>$post, 'category'=>$category, 'location'=>$location,'cart'=>$cart]);
    }

    public function view($id){
        $user = Auth()->user()->id;
        $cart = Cart::where('user_id', $user)->get();
        $post = post::findOrFail($id);
        $photo = Photo::where('post_id', $id)->get();
        $cartbtn = Cart::where('post_id', $id)->where('user_id', $user)->limit(1)->get();
        $inspectionbtn = Inspection::where('post_id', $id)->where('user_id', $user)->where('payment', '0')->limit(1)->get();
        $category = Category::all();
        $location = Location::all();
        return view('home.single', [
            'photo'=>$photo,
            'post'=>$post,
            'category'=>$category,
            'cart'=>$cart,
            'cartbtn'=>$cartbtn,
            'location'=>$location,
            'inspectionbtn'=>$inspectionbtn
        ]);
    }

    public function sort($id){
        $cart = Cart::limit(1)->get();
        $post = post::where('category_id', $id)->paginate(12);
        $categoryname = Category::findOrFail($id);
        $category = Category::all();
        $location = Location::all();
        return view('home.sort-category', [
            'post'=>$post,
            'categoryname'=>$categoryname,
            'cart'=>$cart,
            'category'=>$category,
            'location'=>$location
        ]);
    }

    public function location($id){
        $cart = Cart::limit(1)->get();
        $post = post::where('location_id', $id)->paginate(12);
        $title = Location::findOrFail($id);
        $category = Category::all();
        $location = Location::all();
        return view('home.location', [
            'post'=>$post,
            'title'=>$title,
            'cart'=>$cart,
            'category'=>$category,
            'location'=>$location
        ]);
    }
}
