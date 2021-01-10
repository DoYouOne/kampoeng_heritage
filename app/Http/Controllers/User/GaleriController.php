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

    public function detail_galeri($id){
        $data['galeri'] = \App\Models\Galeri::find($id);
        return view('galeri.u_detail_galeri', $data);
    }
}
