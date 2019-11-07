<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use App\Fitur\absensi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class absensiC extends Controller
{
    public function index() 
    { 
        $sia_siswa = DB::table('sia_siswa')
            ->get();
        $yo = DB::table('sia_siswa')
            ->get();
        $view = DB::table('sia_absensi')
            ->get();
        return view('fabsen.index')->with(compact('sia_siswa', 'yo', 'view'));
    } 

    public function APost(Request $request)
    {
        // dd($request);
        $data = new absensi();  
        $data->id_siswa = $request->nis;
        $data->hari = $request->hari;
        $data->tgl = $request->tgl;
        $data->time = $request->jam;
        // dd($data);
        $data->save();
        
        if($data){ 
            return redirect()->back()->with('save-success', 'Data Absensi telah ditambah');
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data['hari']=$request->hari;
        $data['tgl']=$request->tgl;
        $data['time']=$request->jam;
        
        $cek=DB::table('sia_absensi')->where('id',$id)->update($data);
        
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Absensi telah diubah');
        }
    }

    public function destroy($id) 
    { 
        $data = absensi::where('id', $id);
        $data->delete();
        return redirect()->back()->with('success', 'Data Absensi telah dihapus');
    }
}
