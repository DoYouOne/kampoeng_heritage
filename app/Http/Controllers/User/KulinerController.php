<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index(){
        return view('kuliner.u_tampil_kuliner');
    }
}
