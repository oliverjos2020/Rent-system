<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function show(){
        $user = User::all();
        return view('dashboard.users', ['user'=>$user]);
    }

    public function destroy(User $user){

        $user->delete();
        // User::where('id', $user)->delete();
        // Session::flash('user-deleted', 'User deleted');
        Session::flash('user-deleted', 'User '.$user->name.' deleted successfuly');
        return back();
    }

    public function attach(User $user){
        $user->roles()->attach(request('role'));
        return back();
    }

    public function detach(User $user){
        $user->roles()->detach(request('role'));
        return back();
    }
}
