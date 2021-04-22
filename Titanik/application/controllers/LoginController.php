<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\User;
class LoginController extends Controller
{
     public function login(){
		$a = Hash::make('admin');
		Session::put('tes',$a);
        return view('admin.login');
    }

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = User::where('username',$username)->first();
        if($data){
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('username',$data->username);
                Session::put('login',"1");
                return redirect(url('admin-produk'));
            }
            else{
                return redirect(url('login'))->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect(url('login'))->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect(url('login'))->with('alert','Kamu sudah logout');
    }
}
