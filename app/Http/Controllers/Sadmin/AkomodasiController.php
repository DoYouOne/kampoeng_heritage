<?php

namespace App\Http\Controllers\Sadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkomodasiController extends Controller
{
    public function index(){
        return view('akomodasi.sa_tampil_akomodasi');
    }

    function tambah(){
        return view('akomodasi.sa_tambah_akomodasi');
    }
}
