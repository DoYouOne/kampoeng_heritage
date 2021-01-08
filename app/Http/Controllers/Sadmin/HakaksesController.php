<?php

namespace App\Http\Controllers\Sadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class HakaksesController extends Controller
{
    public function index(){
        $data['hakakses'] = \App\Models\User::all();
        return view('hakakses.sa_tampil_hakakses',$data);
    }

    public function tambah(){
        return view('hakakses.sa_tambah_hakakses');
    }

    public function aksi_tambah(Request $request){
        \App\Models\User::create([
            'name'          => $request->name,
            'email'        => $request->email,
            'password'      => $request->password,
            'status'       => $request->status
        ]);
        return redirect('Sadmin_hakakses');
    }

    public function update($id){
        $hakakses['hakakses'] = \App\Models\User::find($id);
        return view('hakakses.sa_update_hakakses', $hakakses);
    }

    public function aksi_update(Request $request, $id){
        $edit = DB::table('users')->where('id', $id)->update([
            'name'         => $request->name,
            'email'        => $request->email,
            'password'     => Hash::make($request->password),
            'status'       => $request->status
        ]);
        return redirect('Sadmin_hakakses');

    }

    function aksi_delete($id){
        \App\Models\User::where('id', $id)->delete();
        return redirect('/Sadmin_hakakses');
    }
}
