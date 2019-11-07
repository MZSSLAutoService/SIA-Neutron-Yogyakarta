<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use App\Fitur\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authC extends Controller
{
      public function index() {
         echo 'index';
      //   return view('security.login');
      }

      public function create() {
         echo 'create';
      }

      public function store(Request $request) {
         echo 'store';
         // dd($request);
         // $request->validate([
         //    'nis' => 'required|min:4',
         //    'password' => 'required'
         // ]);

         // $nis = $request->input('nis');
         // $password =$request->input('password');

         // if($nis ==''){
         //    return redirect()->back()->with('email-kosong','Harap isi email dengan benar');
         // }elseif($password==''){
         //    return redirect()->back()->with('password-kosong','Harap isi password');
         // }
         // elseif($nis !=''){
         //    $cek = DB::table('sia_siswa')->where(['nis'=>$nis])->first();
         //    Session::put('id',$cek->id);
         //    Session::put('id_cbg',$cek->id_cbg);
         //    if(!(empty($cek))){
         //       if(!Hash::check($password, $cek->password)){
         //          return redirect()->back()->with('password-gagal','Password salah');
         //       }else{
         //          Session::put('id_cbg',$cek->id_cbg);
         //          Session::put('name',$cek->name);
         //          Session::put('login',TRUE);
         //          return redirect('psiswa');
         //       }
         //    }else{
         //       return redirect()->back()->with('email-gagal','Email belum terdaftar');
         //    }
         // }else{
         //    return redirect()->back()->with('login-gagal','Harap login dengan data yang benar');
         // }
      }
      public function show($id) {
         echo 'show';
      }

      public function edit($id) {
         echo 'edit';
      }

      public function update(Request $request, $id) {
         echo 'update';
      }

      public function destroy($id) {
         echo 'destroy';
      }
}
