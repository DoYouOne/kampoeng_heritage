<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkomodasiController extends Controller
{
    public function index(){
        $data['akomodasi'] = \App\Models\Akomodasi::all();
        return view('akomodasi.u_tampil_akomodasi', $data);
    }
}
