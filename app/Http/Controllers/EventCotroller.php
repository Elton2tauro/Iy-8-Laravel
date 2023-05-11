<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventCotroller extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view(
            'welcome',
            ['events' => $events]
        );
    }

    public function create()
    {
        return view('events.create');
    }

    public function contato()
    {
        return view('events.create');
    }
    public function produto()
    {
        return view('events.create');
    }
}
