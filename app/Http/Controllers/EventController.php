<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function create(){
        return view('dashboard.create-event');
    }

    public function store(Request $request){
        $data = $request->validate([
            'title' => ['required','string','min:1'],
            'venue' => ['required','string','min:1','max:255'],
            'event_date' => ['required'],
            'event_time' => 'required',
            'caption' => 'required',
            'flyer' => ['file:jpg,jpeg,png,bmp']
        ]);

        if($file = $request->file('flyer')){

            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $data['flyer'] = $name;

            }else{
                $name = "avatar.jpg";
                $data['flyer'] = $name;
            }
        Event::create($data);
        Session::flash('event-created', 'Event successfully created');
        return back();
    }

    public function show(Event $event){
        return view('dashboard.manage-event', ['event'=>$event::all()]);
    }

    public function edit(Event $event){

        // $event = Event::findOrFail($event);
        return view('dashboard.edit-event', [
            'event'=>$event
        ]);
    }

    public function update(Request $request,Event $event, $id){
        $data = $request->validate([
            'title' => ['required','string','min:1'],
            'venue' => ['required','string','min:1','max:255'],
            'event_date' => ['required'],
            'event_time' => 'required',
            'caption' => 'required',
            'flyer' => ['file:jpg,jpeg,png,bmp']
        ]);

        if($file = $request->file('flyer')){

            $name = $file->getClientOriginalName();
            $file->move('images', $name);
            $data['flyer'] = $name;

            }else{
                // $name = "avatar.jpg";
                // $data['flyer'] = $name;
            }
            // Event::update($data);
            Event::whereId($id)->first()->update($data);

        Session::flash('event-updated', 'Event successfully updated');
        return back();
    }

    public function destroy($id){

        $event = Event::findOrFail($id);


        $event->delete();
        Session::flash('event-deleted', "Event deleted");
        return back();
    }
}
