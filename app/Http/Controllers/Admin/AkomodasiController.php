<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Akomodasi;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkomodasiController extends Controller
{
    public function index(){
        $data['akomodasi'] = \App\Models\Akomodasi::all();
        return view('akomodasi.a_tampil_akomodasi', $data);
    }

    function tambah(){
        return view('akomodasi.a_tambah_akomodasi');
    }

    public function aksi_tambah(Request $request){
        $filetype = '|file|image|mimes:jpeg,png,jpg|max:2048';
        $filename = $request->file('gambar');
        $nama_file = time()."_".$filename->getClientOriginalName();
        $fileloc   = '../public/uploads/akomodasi/';
        $filename->move($fileloc,$nama_file);

        \App\Models\Akomodasi::create([
            'nama'          => $request->nama,
            'foto'          => $nama_file,
            'alamat'        => $request->alamat,
            'harga'         => $request->harga,
            'telepon'       => $request->telepon
        ]);
        return redirect('Admin_akomodasi');
    }

    public function update($id){
        $akomodasi['akomodasi'] = \App\Models\Akomodasi::find($id);
        return view('akomodasi.a_update_akomodasi', $akomodasi);
    }

    public function aksi_update(Request $request, $id){
        $cek = $request->gambar;
        if($cek != null){
            $gambar = Akomodasi::select('foto')->where('id', $id)->first();
            File::delete(public_path('/uploads/akomodasi/').$gambar->foto);

            $filetype = '|file|image|mimes:jpeg,png,jpg|max:2048';
            $filename = $request->file('gambar');
            $nama_file = time()."_".$filename->getClientOriginalName();
            $fileloc   = '../public/uploads/akomodasi/';
            $filename->move($fileloc,$nama_file);

            $edit = DB::table('akomodasi')->where('id', $id)->update([
                'nama'          => $request->nama,
                'foto'          => $nama_file,
                'alamat'        => $request->alamat,
                'harga'         => $request->harga,
                'telepon'       => $request->telepon
            ]);

            return redirect('Admin_akomodasi');
        }
        //Edit data tanpa foto
        $edit = DB::table('akomodasi')->where('id', $id)->update([
            'nama'          => $request->nama,
            'alamat'        => $request->alamat,
            'harga'         => $request->harga,
            'telepon'       => $request->telepon
        ]);
        return redirect('Admin_akomodasi');

    }

    function aksi_delete($id){
        $gambar = \App\Models\Akomodasi::where('id', $id)->first();
            File::delete(public_path('/uploads/akomodasi/').$gambar->foto);
            \App\Models\Akomodasi::where('id', $id)->delete();

        return redirect('/Admin_akomodasi');
    }
}
