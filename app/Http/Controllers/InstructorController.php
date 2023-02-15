<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use Illuminate\Support\Facades\Session;

class InstructorController extends Controller
{
    public function create(Request $request){

        request()->validate([
            'email' => ['string','required']
        ]);
        Instructor::create([
            'email'=>request('email')
        ]);
        Session::flash('instructor-created', 'Thank you for subscribing');
        return back();
    }
}
