<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('index', compact('events'));
    }

    public function create()
    {
        return view('add_event');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image_url' => 'required|url',
            'link' => 'required|url',
        ]);

        Event::create($request->all());

        return redirect()->route('home')->with('success', 'Event berhasil ditambahkan!');
    }
}
