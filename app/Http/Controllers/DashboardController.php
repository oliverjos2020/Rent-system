<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Property;
use Illuminate\Support\Facades\Session;
class DashboardController extends Controller
{
    public function index(){
        $property = Property::all();
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
