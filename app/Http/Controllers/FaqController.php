<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use Illuminate\Support\Facades\Session;

class FaqController extends Controller
{
    public function index(Faq $faq){
        return view('dashboard.faq', [
            'faq'=>$faq::all()
       ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => 'required',
            'description' => ['required','string','min:15']
        ]);

        Faq::create($data);
        Session::flash('faq-created', 'FAQ created');
        return back();
    }

    public function edit(Faq $faq){
        return view('dashboard.editfaq', [
            'faq' => $faq,
            'faqs'=>$faq::all()
        ]);
    }

    public function update(Faq $faq){
        $faq->title = request('title');
        $faq->description = request('description');
        if($faq->isDirty('title') || $faq->isDirty('description')){
            Session::flash('faq-updated', 'FAQ Updated to ->');
            $faq->save();
        }else{
            Session::flash('faq-updated', 'Nothing has been updated');
        }
        return back();
    }

    public function delete(Faq $faq){
        $faq->delete();
        Session::flash('faq-deleted', 'Deleted FAQ '.$faq->title);
        return view('dashboard.faq');
    }
}
