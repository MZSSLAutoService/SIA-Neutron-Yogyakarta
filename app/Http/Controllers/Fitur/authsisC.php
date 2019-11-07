<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use App\Fitur\authsis;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class authsisC extends Controller
{
        public function index() {
            // echo 'index';
            return view('security.ye');
        }

        public function create() {
            echo 'create';
        }

        public function psiswa() {
            $yo = DB::table('sia_cabang')
                        ->get();
            $ye = DB::table('sia_kelas')
                        ->get();
            $file=DB::table('sia_ringmat')
                        ->where('id_cbg',Session::get('id_cbg'))
                        ->where('id_kls',Session::get('id_kls'))
                        ->get();
            $jdwl=DB::table('sia_jadwal')
                        ->where('id_cbg',Session::get('id_cbg'))
                        ->get();
            $abs=DB::table('sia_absensi')
                        ->where('id_siswa',Session::get('nis'))
                        ->get();
            $nil=DB::table('sia_nilai')
                        ->where('id_siswa',Session::get('nis'))
                        ->get();
            $siswa = DB::table('sia_siswa')
                        ->select('name')
                        ->where('nis',Session::get('nis'))
                        ->first();
            return view('psiswa.swiswa')->with(compact('siswa', 'yo', 'ye', 'file', 'jdwl', 'abs', 'nil'));
        }

        public function store(Request $request) {
            //  dd($request);
            $request->validate([
               'nis' => 'required|min:4',
               'password' => 'required'
            ]);

            $nis = $request->input('nis');
            $password =$request->input('password');

            if($nis ==''){
               return redirect()->back()->with('email-kosong','Harap isi email dengan benar');
            }elseif($password==''){
               return redirect()->back()->with('password-kosong','Harap isi password');
            }
            elseif($nis !=''){
               $cek = DB::table('sia_siswa')->where(['nis'=>$nis])->first();
            //    $cek = DB::table('sia_siswa')->where(['nis'=>$nis])->first();
               // Session::put('id',$cek->id);
               // Session::put('id_cbg',$cek->id_cbg);
               if(!(empty($cek))){
                   if(!Hash::check($password, $cek->password)){
                       return redirect()->back()->with('password-gagal','Password salah');
                   }else{
                      Session::put('id_cbg',$cek->id_cbg);
                      Session::put('id_kls',$cek->id_kls);
                      Session::put('nis',$cek->nis);
                      Session::put('name',$cek->name);
                      Session::put('ttl',$cek->ttl);
                      Session::put('agama',$cek->agama);
                      Session::put('jenis_kelamin',$cek->jenis_kelamin);
                      Session::put('asal_sekolah',$cek->asal_sekolah);
                      Session::put('login',TRUE);
                      return redirect('psiswa');
                   }
               }else{
                  return redirect()->back()->with('nis-gagal','NIS belum terdaftar');
               }
            }else{
               return redirect()->back()->with('login-gagal','Harap login dengan data yang benar');
            }
        }

        public function logout(){
            Session::flush();
            return redirect('login')->with('alert','Anda Sudah Logout');
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
