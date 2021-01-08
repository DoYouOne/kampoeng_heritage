<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{

    public function login(){
        return view('auth.login_page');
    }

    public function proses_login(Request $request){
        $this->validate($request, [
            'name'      =>'required',
            'password'  => 'required|min:6'
        ]);

        if(Auth::attempt($request->only('name','password'))){
            $role = DB::table('users')->where('name', $request->name)->first();
            // dd($role);
            if($role->status == '0'){ //superAdmin
                return redirect('/Sadmin_beranda');
            } else if($role->status == '1'){ //Admin
                return redirect('/Admin_beranda');
            } else if($role->status == '2'){ //User
                return redirect('/beranda');
            }
        } else{
            
            return redirect('/login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
