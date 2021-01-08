<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index(){
        return view('testimoni.u_tampil_testimoni');
    }
}
