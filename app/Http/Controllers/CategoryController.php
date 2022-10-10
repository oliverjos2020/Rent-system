<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('dashboard.categories', ['category' => $category]);
    }

    public function store(){
        request()->validate([
            'name' => ['string','required']
        ]);
        Category::create([
            'name'=>Str::ucfirst(request('name')),
            'slug'=>Str::of(Str::lower(request('name')))->slug('-')
        ]);
        Session::flash('category-created', ''.request()->name.' created');
        return back();
    }

    public function edit(Category $category){
        return view('dashboard.editcategory', [
            'category' => $category, 
            'categories' => Category::all()
        ]);
    }

    public function update(Category $category){
        $category->name = Str::ucfirst(request('name'));
        $category->slug = Str::of(request('name'))->slug('-');
        if($category->isDirty('name')){
            Session::flash('category-updated', 'Category Updated to ->'.request()->name);
            $category->save();
        }else{
            Session::flash('category-updated', 'Nothing has been update');
        }
        return back();
    }

    public function delete(Category $category){
        $category->delete();
        Session::flash('category-deleted', 'Deleted category '.$category->name);
        return back();
    }

}
