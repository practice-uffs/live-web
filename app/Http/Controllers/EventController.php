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
        $user = Auth::user();

        $event = Event::create([
            'title' => '',
            'user_questions' => '',
            'questions' => [],
            'status' => 'idle',
            'user_id' => $user->id,
            'hash' => Str::random(32),
        ]);

        $event->transmissions()->create([
            'user_id' => $user->id,
            'type' => 'youtube',
            'url' => 'https://www.youtube.com/watch?v=xxx',
            'key' => '',
            'status' => 'idle',
        ]);

        $event->rooms()->create([
            'user_id' => $user->id,
            'type' => 'google_meet',
            'url' => 'https://meet.google.com/xxx',
            'status' => 'idle',
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
