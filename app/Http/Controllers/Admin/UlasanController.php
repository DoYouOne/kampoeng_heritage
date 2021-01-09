<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UlasanController extends Controller
{
    public function index(){
        $data['testimoni'] = \App\Models\Testimoni::all();
        return view('testimoni.a_tampil_testimoni',$data);
    }

    public function aksi_tambah(Request $request){
        \App\Models\Testimoni::create([
            'id_user'      => $request->id_user,
            'ulasan'       => $request->ulasan
        ]);
        return redirect('Admin_ulasan');
    }

    public function update($id){
        $testimoni['testimoni'] = \App\Models\Testimoni::find($id);
        return view('testimoni.a_update_testimoni', $testimoni);
    }

    public function aksi_update(Request $request, $id){
        $edit = DB::table('testimoni')->where('id', $id)->update([
            'ulasan'         => $request->ulasan
        ]);
        return redirect('Admin_ulasan');

    }

    function aksi_delete($id){
        \App\Models\Testimoni::where('id', $id)->delete();
        return redirect('/Admin_ulasan');
    }
}