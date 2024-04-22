<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    
    public function index() {

        $events = Event::all();

        return view('welcome', ['events' => $events]);

    }

    public function events() {
        return view('events');
    }

    public function create() {
        return view('create');
    }

    public function contact() {
        return view('contact');
    }

    public function login() {
        return view('login');
    }    

    public function register() {
        return view('register');
    }

    public function store(Request $request) {

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        // Image upload //
        if($request->hasFile('image') && $request->file('image')->isValid())  {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/events'), $imageName);

            $event->image = $imageName;

        }

        $event->save();

        return redirect('/')->with('msg', 'event created successfully');

    }
    
}