<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = auth()->user()->events()->orderBy('id', 'desc')->get();

        if ($events == null) {
            $events = [];
        }

        return view('home', [
            'events' => $events
        ]);
    }
}
