<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    public function index(){
        $data['kuliner'] = \App\Models\Kuliner::all();
        return view('kuliner.u_tampil_kuliner', $data);
    }
}
