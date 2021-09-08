<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('event.index');
    }

    public function create()
    {
        $event = Event::create([
            'title' => '',
            'user_questions' => '',
            'questions' => [],
            'user_id' => Auth::user()->id,
            'hash' => Str::random(32),
        ]);

        return redirect(route('event.edit', $event));
    }

    public function edit(event $event)
    {
        return view('event.edit', [
            'event' => $event,
        ]);
    }
}
