<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function index(){
        $data['galeri'] = DB::table('galeri')
                            ->orderByDesc('created_at')
                            ->get();
        return view('galeri.u_tampil_galeri',$data);
    }
}
