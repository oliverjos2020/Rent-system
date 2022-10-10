<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Photo;
use App\Models\Category;
use App\Models\Location;

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
        $property = Property::paginate(6);
        $category = Category::all();
        $location = Location::all();
        
        return view('home', ['property'=>$property, 'category'=>$category, 'location'=>$location]);
    }

    public function listing(){
        $property = Property::paginate(6);
        $category = Category::all();
        $location = Location::all();
        return view('home.listing', ['property'=>$property, 'category'=>$category, 'location'=>$location]);
    }

    public function view($id, Category $category, Location $location, Photo $photo, Property $property){
        $property = Property::findOrFail($id);
        $photo = Photo::where('property_id', $id)->get();
        $category = Category::all();
        $location = Location::all();
        return view('home.single', [
            'photo'=>$photo,
            'property'=>$property, 
            'category'=>$category,
            'location'=>$location
        ]);
    }

    public function sort($id){
        $property = Property::where('category_id', $id)->paginate(12);
        $categoryname = Category::findOrFail($id);
        $category = Category::all();
        $location = Location::all();
        return view('home.sort-category', [
            'property'=>$property,
            'categoryname'=>$categoryname,
            'category'=>$category,
            'location'=>$location
        ]);
    }
}
