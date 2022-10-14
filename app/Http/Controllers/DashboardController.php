<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Property;
use App\Models\Biodata;
use Illuminate\Support\Facades\Session;
class DashboardController extends Controller
{
    public function index(){
        $user = auth()->user()->id;
        $property = Property::all();
        if(Biodata::where('user_id', $user)->exists()){
            Session::flash('exist', 'You have completed your biodata');
        }else{
            Session::flash('not-exist', 'You have not completed your biodata');
        }
        return view('dashboard.index', ['property'=>$property]);
    }

    public function show(User $user){
        return view('dashboard.profile', ['user'=>$user, 'roles'=>Role::all()]);
    }
 
    public function update(User $user){

        $input = request()->validate([
            'name' => ['required','string','max:255'],
            'phone' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'max:255'],
            'avatar' => ['file:jpg,jpeg,png,bmp'],
            // 'password' => ['min:8','max:255']
        ]);

        if($avatar = request()->file('avatar')){

            $name = $avatar->getClientOriginalName();
            $avatar->move('images', $name);
            $input['avatar'] = $name;
    
            }
        // if(request('avatar')){
        //     $input['avatar'] = request('avatar')->store('images');
        // }

        
        Session::flash('profile-updated', 'Profile has been updated');

        $user->update($input);
        return back();
    }

}
