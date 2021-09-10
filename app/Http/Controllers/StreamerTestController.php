<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Event;

class StreamerTestController extends Controller
{
    public function index(event $event)
    {
        return view('test.streamer', [
            'event' => $event,
        ]);
    }
}
