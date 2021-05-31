<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;

class AuthController extends Controller
{
    public function login()
    {

        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
       if(!\Auth::attempt(['name'=>$request->name, 'email'=>$request->email, 'password'=>$request->password]))
       {
            return redirect()->back()->with('msg','Ada kesalahan nama, email, atau password, silahkan coba lagi!');
       }

       Session::flash('sukses','Anda berhasil login!');
       return redirect ('/dashboard');
    }

    public function register()
    {
        return view('auths.register');
    }

    public function postregister(Request $request)
    {
        $validator = $this->validate($request,[
            'name'=>'required|min:4',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|confirmed' // dicocokan dengan field confirmation
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> bcrypt($request->password),

        ]);

        Session::flash('sukses','Anda berhasil register!');

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();

        Session::flash('sukses','Anda berhasil logout!');

        return redirect('/login');
    }
}
