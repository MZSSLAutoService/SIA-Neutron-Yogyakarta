<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use App\Fitur\siswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class siswaC extends Controller
{
    public function index() 
    { 
        $siswa = DB::table('sia_siswa')
            ->get();
        $yo = DB::table('sia_cabang')
            ->get();
        return view('fsiswa.index')->with(compact('siswa', 'yo'));
        // echo 'show';
    } 

    public function SPost(Request $request)
    {
        // dd($request);
        $data = new siswa();
        $data->id_cbg = $request->cbg;
        $data->nis = $request->nis;
        $defpass = $request->nis;
        $data->password = bcrypt($defpass);
        $data->name = $request->name;
        $data->ttl = $request->ttl;
        $data->agama = $request->agm;
        $data->asal_sekolah = $request->ask;
        $data->jenis_kelamin = $request->jk;
        // dd($data);
        $data->save();
        
        if($data){ 
            return redirect()->back()->with('save-success', 'Data Siswa telah ditambah');
        }
    }

    public function update(Request $request, $id)
    {
        if($request->password == $request->repassword){
            $data['password'] = bcrypt($request->password);
        }else{
            return redirect()->back();
        }

        $data['name']=$request->name;
        $data['ttl']=$request->ttl;
        $data['agama']=$request->agm;
        $data['jenis_kelamin']=$request->jk;
        $data['asal_sekolah']=$request->ask;
        
        $cek=DB::table('sia_siswa')->where('id',$id)->update($data);
        
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Siswa telah diubah');
        }
    }

    public function show() {
        $siswa = DB::table('sia_siswa')
            ->get();
        $yo = DB::table('sia_cabang')
            ->get();
        return view('fsiswa.index')->with(compact('siswa', 'yo'));
    }

    public function destroy($id) 
    { 
        $data = siswa::where('id', $id);
        $data->delete();
        return redirect()->back()->with('success', 'Data Ssiwa telah dihapus');
    }
}
