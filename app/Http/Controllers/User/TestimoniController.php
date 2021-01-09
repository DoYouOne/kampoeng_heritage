<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    public function index(){
        $data['testimoni'] = DB::table('testimoni')
                            ->orderByDesc('tanggal')
                            ->get();
        return view('testimoni.u_tampil_testimoni', $data);
    }
}
