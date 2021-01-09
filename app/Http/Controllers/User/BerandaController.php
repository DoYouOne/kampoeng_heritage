<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event as ModelsEvent;
use Illuminate\Support\Facades\DB;

class BerandaController extends Controller
{
    public function index(){
        // $event['event'] = DB::table('event')->paginate(6);
        $event['event'] = DB::table('event')
                            ->orderByDesc('waktu')
                            ->limit('3')
                            ->get();

        return view('beranda.beranda_user', $event);
    }

}
