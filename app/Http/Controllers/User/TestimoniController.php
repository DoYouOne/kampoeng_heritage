<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimoniController extends Controller
{
    public function index(){
        $data['testimoni'] = DB::table('testimoni')
                            ->join('users', 'testimoni.id_user', '=', 'users.id')
                            ->orderByDesc('tanggal')
                            ->get();
        return view('testimoni.u_tampil_testimoni', $data);
    }

    public function tambah_testimoni(){
        return view('testimoni.u_tambah_testimoni');
    }

    public function aksi_tambah(Request $request){
        \App\Models\Testimoni::create([
            'id_user'      => $request->id_user,
            'ulasan'       => $request->ulasan
        ]);
        return redirect('testimoni');
    }
}
