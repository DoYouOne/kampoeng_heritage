<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GaleriController extends Controller
{
    public function index(){
        $data['galeri'] = \App\Models\Galeri::all();
        return view('galeri.a_tampil_galeri',$data);
    }

    public function tambah(){
        return view('galeri.a_tambah_galeri');
    }

    public function aksi_tambah(Request $request){
        $filetype = '|file|image|mimes:jpeg,png,jpg|max:2048';
        $filename = $request->file('gambar');
        $nama_file = time()."_".$filename->getClientOriginalName();
        $fileloc   = '../public/uploads/galeri/';
        $filename->move($fileloc,$nama_file);

        \App\Models\galeri::create([
            'keterangan'         => $request->keterangan,
            'foto'          => $nama_file
        ]);
        return redirect('Admin_galeri');
    }

    public function update($id){
        $galeri['galeri'] = \App\Models\Galeri::find($id);
        return view('galeri.a_update_galeri', $galeri);
    }

    public function aksi_update(Request $request, $id){
        $cek = $request->gambar;
        if($cek != null){
            $gambar = Galeri::select('foto')->where('id', $id)->first();
            File::delete(public_path('/uploads/galeri/').$gambar->foto);

            $filetype = '|file|image|mimes:jpeg,png,jpg|max:2048';
            $filename = $request->file('gambar');
            $nama_file = time()."_".$filename->getClientOriginalName();
            $fileloc   = '../public/uploads/galeri/';
            $filename->move($fileloc,$nama_file);

            $edit = DB::table('galeri')->where('id', $id)->update([
                'keterangan'    => $request->keterangan,
                'foto'          => $nama_file
            ]);

            return redirect('Admin_galeri');
        }
        //Edit data tanpa foto
        $edit = DB::table('galeri')->where('id', $id)->update([
            'keterangan'       => $request->keterangan
        ]);
        return redirect('Admin_galeri');

    }

    function aksi_delete($id){
        $gambar = \App\Models\Galeri::where('id', $id)->first();
            File::delete(public_path('/uploads/galeri/').$gambar->foto);
            \App\Models\Galeri::where('id', $id)->delete();

        return redirect('/Admin_galeri');
    }
}
