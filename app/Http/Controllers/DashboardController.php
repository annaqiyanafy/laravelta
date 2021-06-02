<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Karyawan;
use Session;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        //Mengambil data dari table karyawan di phpmyadmin
        $users =DB::table('users')->get();

        //Mengirim data siswa ke view crudutama
        return view('dashboards.utama',['users'=>$users]);

    }
    public function profil()
    {
        return view('dashboards.profil');
    }
    public function datakaryawan()
    {
        $karyawan =DB::table('karyawan')->get();

        //menghitung total record data karyawan
        $jumlah = Karyawan::all()->count();
        //Mengirim data siswa ke view crudutama
        return view('dashboards.datakaryawan',['karyawan'=>$karyawan])->with('jumlah',$jumlah);
    }
    public function produk()
    {
        return view('dashboards.produk');
    }


    public function olahdatakaryawan()
    {
        //Mengambil data dari table karyawan di phpmyadmin
        $karyawan =DB::table('karyawan')->get();

        //Mengirim data siswa ke view crudutama
        return view('crud.crudutama',['karyawan'=>$karyawan]);

    }
    public function akun()
    {
         //Mengambil data dari table karyawan di phpmyadmin
         $users =DB::table('users')->get();

         //Mengirim data siswa ke view crudutama
         return view('dashboards.akun',['users'=>$users]);
    }
    public function editakun(Request $request)
    {
        $validator = $this->validate($request,[
            'name'=>'required|min:4',
            'email'=>'required|email',
            'password'=>'required|min:5|confirmed' // dicocokan dengan field confirmation
        ]);

        DB::table('users')->where('id',$request->id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> bcrypt($request->password),
        ]);

    
            // alihkan halaman ke halaman view login
            return view('dashboards.utama');
    }
    public function hapus($id)
    {
        // hapus data
	    karyawan::where('id',$id)->delete();

        Session::flash('sukses','Data karyawan berhasil terhapus!');

        //mengalih halaman ke olah data karyawan
        return redirect()->back();

        
    }
    public function edit($id)
    {
        
        $karyawan=DB::table('karyawan')->where('id',$id)->get();

        return view('/olahdatakaryawan',['karyawan'=>$karyawan]);
    }

    public function update(Request $request)
    {
        $validator = $this->validate($request,[
            'tanggallahir'=>'date_format:Y-m-d',
            'jeniskelamin'=>'required',
            'nomorhp'=>'min:11|numeric'
            ]);

    DB::table('karyawan')->where('id',$request->id)->update([
		'nama' => $request->nama,
		'tempatlahir' => $request->tempatlahir,
		'tanggallahir' => $request->tanggallahir,
		'jeniskelamin' => $request->jeniskelamin,
        'alamat' => $request->alamat,
        'nomorhp' => $request->nomorhp,
        'agama' => $request->agama,
        'statusperkawinan' => $request->statusperkawinan,
        ]);

        Session::flash('sukses','Data karyawan berhasil ter-update!');

        // alihkan halaman ke halaman view crudutama
        return redirect('/olahdatakaryawan');
    }

    public function tambah(Request $request)
    {
        $validator = $this->validate($request,[
            'tanggallahir'=>'date_format:Y-m-d',
            'jeniskelamin'=>'required',
            'nomorhp'=>'min:11|numeric'
            ]);
            
        //insert data ke table karyawan
        DB::table('karyawan')->insert([
            'nama'=>$request->nama,
            'tempatlahir'=>$request->tempatlahir,
            'tanggallahir'=>$request->tanggallahir,
            'jeniskelamin'=>$request->jeniskelamin,
            'alamat'=>$request->alamat,
            'nomorhp'=>$request->nomorhp,
            'agama'=>$request->agama,
            'statusperkawinan'=>$request->statusperkawinan,
            ]);

            Session::flash('sukses','Data karyawan berhasil ditambah!');
            
            return redirect('/olahdatakaryawan');
       
    }
}
