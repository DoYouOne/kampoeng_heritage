<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function index(){

        $event['event'] = \App\Models\Event::all();

        return view('event.a_tampil_event', $event);
    }

    public function tambah(){
        return view('event.a_tambah_event');
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

        return redirect('/admin_event');
    }

    public function aksi_delete($id){
            $gambar = Event::where('id', $id)->first();
            File::delete(public_path('/uploads/event/').$gambar->foto);
            Event::where('id', $id)->delete();

        return redirect('/Admin_event');
    }

    public function update($id){
        $event['event'] = \App\Models\Event::find($id);
        return view('event.a_update_event', $event);
    }

    public function aksi_update(Request $request, $id){
        $cek = $request->gambar;
        if($cek != null){
            $gambar = Event::select('foto')->where('id', $id)->first();
            File::delete(public_path('/uploads/event/').$gambar->foto);

            $filetype = '|file|image|mimes:jpeg,png,jpg|max:2048';
            $filename = $request->file('gambar');
            $nama_file = time()."_".$filename->getClientOriginalName();
            $fileloc   = '../public/uploads/event/';
            $filename->move($fileloc,$nama_file);

            $edit = DB::table('event')->where('id', $id)->update([
                'judul'         => $request->judul,
                'deskripsi'     => $request->deskripsi,
                'penyelenggara' => $request->penyelenggara,
                'waktu'         => $request->waktu,
                'jam'           => $request->jam,
                'foto'          => $nama_file
            ]);

            return redirect('Admin_event');
        }
        //Edit data tanpa foto
        $edit = DB::table('event')->where('id', $id)->update([
            'judul'         => $request->judul,
            'deskripsi'     => $request->deskripsi,
            'penyelenggara' => $request->penyelenggara,
            'waktu'         => $request->waktu,
            'jam'           => $request->jam
        ]);
        return redirect('Admin_event');

    }
}
