<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function index(){
        $data = array(
            'event'     => DB::table('event')->count(),
            'galeri'    => DB::table('galeri')->count(),
            'ulasan'    => DB::table('testimoni')->count()
        );
        return view('beranda.beranda_admin', $data);
    }
}
