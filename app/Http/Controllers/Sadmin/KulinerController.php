<?php

namespace App\Http\Controllers\Sadmin;

use App\Http\Controllers\Controller;
use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function update($id){
        $kuliner['kuliner'] = \App\Models\Kuliner::find($id);
        return view('kuliner.sa_update_kuliner', $kuliner);
    }

    public function aksi_update(Request $request, $id){
        $cek = $request->gambar;
        if($cek != null){
            $gambar = Kuliner::select('foto')->where('id', $id)->first();
            File::delete(public_path('/uploads/kuliner/').$gambar->foto);

            $filetype = '|file|image|mimes:jpeg,png,jpg|max:2048';
            $filename = $request->file('gambar');
            $nama_file = time()."_".$filename->getClientOriginalName();
            $fileloc   = '../public/uploads/kuliner/';
            $filename->move($fileloc,$nama_file);

            $edit = DB::table('kuliner')->where('id', $id)->update([
                'nama'          => $request->nama,
                'foto'          => $nama_file,
                'alamat'        => $request->alamat,
                'harga'         => $request->harga,
                'telepon'       => $request->telepon
            ]);

            return redirect('Sadmin_kuliner');
        }
        //Edit data tanpa foto
        $edit = DB::table('kuliner')->where('id', $id)->update([
            'nama'          => $request->nama,
            'alamat'        => $request->alamat,
            'harga'         => $request->harga,
            'telepon'       => $request->telepon
        ]);
        return redirect('Sadmin_kuliner');

    }

    function aksi_delete($id){
        $gambar = \App\Models\Kuliner::where('id', $id)->first();
            File::delete(public_path('/uploads/kuliner/').$gambar->foto);
            \App\Models\Kuliner::where('id', $id)->delete();

        return redirect('/Sadmin_kuliner');
    }
}
