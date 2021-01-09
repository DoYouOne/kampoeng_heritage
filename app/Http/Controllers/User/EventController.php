<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(){
        $event['event'] = DB::table('event')
                            ->orderByDesc('waktu')
                            ->get();

        return view('event.u_tampil_event', $event);
    }

    public function detail_event($id){
        $event['event'] = \App\Models\Event::find($id);
        return view('event.u_detail_event', $event);
    }
}
