<?php

namespace App\Http\Controllers\Sadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KulinerController extends Controller
{
    public function index(){
        $data['kuliner'] = \App\Models\Kuliner::all();
        return view('kuliner.sa_tampil_kuliner',$data);
    }

    public function tambah(){
        return view('kuliner.sa_tambah_kuliner');
    }

    public function aksi_tambah(Request $request){
        $filetype = '|file|image|mimes:jpeg,png,jpg|max:2048';
        $filename = $request->file('gambar');
        $nama_file = time()."_".$filename->getClientOriginalName();
        $fileloc   = '../public/uploads/kuliner/';
        $filename->move($fileloc,$nama_file);

        \App\Models\Kuliner::create([
            'nama'          => $request->nama,
            'foto'          => $nama_file,
            'alamat'        => $request->alamat,
            'harga'         => $request->harga,
            'telepon'       => $request->telepon
        ]);
        return redirect('Sadmin_kuliner');
    }

    function hapus($id){
        $gambar = \App\Models\Kuliner::where('id', $id)->first();
            File::delete(public_path('/uploads/kuliner/').$gambar->foto);
            \App\Models\Kuliner::where('id', $id)->delete();

        return redirect('/Sadmin_kuliner');
    }
}
