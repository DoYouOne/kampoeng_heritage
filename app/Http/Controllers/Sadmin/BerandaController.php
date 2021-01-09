<?php

namespace App\Http\Controllers\Sadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function index(){
        $data = array(
            'user'      => DB::table('users')->count(),
            'event'     => DB::table('event')->count(),
            'ulasan'    => DB::table('testimoni')->count()
        );
        return view('beranda.beranda_sadmin', $data);
    }
}
