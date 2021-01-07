<?php

namespace App\Http\Controllers\Sadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File; 

class EventController extends Controller
{
    public function index(){
        
        $event['event'] = \App\Models\Event::all();

        return view('event.sa_tampil_event', $event);
    }

    public function tambah(){
        return view('event.sa_tambah_event');
    }

    public function aksi_tambah(Request $request){
         
        $filetype = '|file|image|mimes:jpeg,png,jpg|max:2048';
        $filename = $request->file('gambar');
        $nama_file = time()."_".$filename->getClientOriginalName();
        $fileloc   = '../public/uploads/event/';
        $filename->move($fileloc,$nama_file);

        \App\Models\Event::create([
            'judul'         => $request->judul,
            'deskripsi'     => $request->deskripsi,
            'penyelenggara' => $request->penyelenggara,
            'waktu'         => $request->waktu,
            'jam'           => $request->jam,
            'foto'          => $nama_file
        ]);

        return redirect('/Sadmin_event');
    }

    public function aksi_delete($id){
            $gambar = \App\Models\Event::where('id', $id)->first();
            File::delete(public_path('/uploads/event/').$gambar->foto);
            \App\Models\Event::where('id', $id)->delete();

        return redirect('/Sadmin_event');
    }

}
