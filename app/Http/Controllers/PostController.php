<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\postRequest;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Location;
use App\Models\Photo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class postController extends Controller
{
    public function create(Location $location, Category $category){
        return view('dashboard.create-post', [
            'category'=>$category::all(),
            'location'=>$location::all()
       ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => ['required','string','min:15'],
            'short_description' => ['required','string','min:15','max:255'],
            'description' => ['required','string','min:15'],
            'category_id' => 'required',
            'featured' => 'required',
            'featured_image' => ['file:jpg,jpeg,png,bmp']
        ]);

        if($file = $request->file('featured_image')){

            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $data['featured_image'] = $name;

            }else{
                $name = "avatar.jpg";
                $data['featured_image'] = $name;
            }
        //$newpost = post::create($data);
        $newpost = auth()->user()->properties()->create($data);

        if($request->has('photo_id')){
            foreach($request->file('photo_id')as $image){
                $imageName = $data['title'].'-image-'.time().rand(1,100).'.'.$image->extension();
                $image->move(public_path('images'), $imageName);
                Photo::create([
                    'post_id' => $newpost->id,
                    'file' => $imageName
                ]);
            }
        }
        Session::flash('post-created', 'post created');
        return back();
    }

    public function show(post $post){
        return view('dashboard.manage-post', ['post'=>$post::all()]);
    }

    public function edit($id, Category $category, Location $location, Photo $photo){

        $post = post::findOrFail($id);
        $photo = Photo::where('post_id', $id)->get();
        return view('dashboard.edit-post', [
            'photo'=>$photo,
            'post'=>$post,
            'category'=>$category::all()
        ]);
    }

    public function update(Request $request, $id){

        $data = $request->validate([
            'title' => 'required',
            'short_description' => ['required','string','min:15'],
            'description' => ['required','string','min:15'],
            'category_id' => 'required',
            'featured' => 'required',
            'featured_image' => ['file:jpg,jpeg,png,bmp']
        ]);
        //$newpost = post::create($data);

        if($file = $request->file('featured_image')){

            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $data['featured_image'] = $name;

            }
        $newpost = auth()->user()->properties()->whereId($id)->first()->update($data);

        if($request->has('photo_id')){
            foreach($request->file('photo_id')as $image){
                $imageName = $data['title'].'-image-'.time().rand(1,100).'.'.$image->extension();
                $image->move(public_path('images'), $imageName);
                Photo::create([
                    'post_id' => $id,
                    'file' => $imageName
                ]);
            }
        }
        Session::flash('post-updated', 'post updated');
        return back();
    }

    public function destroy($id){

        $post = post::findOrFail($id);
        $photo = Photo::where('post_id', $id)->get();
        foreach($photo as $photos){
            unlink(public_path() . $photos->file);
        }

        $post->delete();
        Session::flash('post-deleted', "post deleted");
        return back();
    }
}
