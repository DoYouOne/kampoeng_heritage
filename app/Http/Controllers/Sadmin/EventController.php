<?php

namespace App\Http\Controllers\Sadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use file;

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
        
        // $this->validate($request, [
        //     'judul'         => 'required|min:6|max:24',
        //     'deskripsi'     => 'required|min:60|max:420',
        //     'penyelenggara' => 'required|min:2|max:16',
        // ]);

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
        \App\Models\Event::where('id', $id)->delete();

    return redirect('/Sadmin_event');
}
}
