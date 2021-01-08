<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $event['event'] = \App\Models\Event::all();

        return view('event.u_tampil_event');
    }
}
