<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tentang_kamiController extends Controller
{
    public function index(){
        return view('tentang_kami.u_tampil_tentang_kami');
    }
}
