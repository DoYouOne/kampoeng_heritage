<?php

namespace App\Http\Controllers\Sadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view('event.sa_tampil_event');
    }

    public function tambah(){
        return view('event.sa_tambah_event');
    }
}
