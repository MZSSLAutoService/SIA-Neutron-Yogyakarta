<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use App\Fitur\nilai;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class nilaiC extends Controller
{
    public function index() 
    { 
        $sia_siswa = DB::table('sia_siswa')
            ->get();
        $yo = DB::table('sia_siswa')
            ->get();
        $ntpa = DB::table('sia_nilai')
            ->get();
        return view('fnilai.index')->with(compact('sia_siswa', 'yo', 'ntpa'));
    }

    public function NPost(Request $request)
    {
        // dd($request);
        $data = new nilai();  
        $data->id_siswa = $request->nis;
        $data->tgl = $request->tgl;
        $data->jenis_tes = $request->jenis;
        $data->bidang = $request->bid;
        $data->nilai = $request->nilai;
        // dd($data);
        $data->save();
        
        if($data){ 
            return redirect()->back()->with('save-success', 'Data Absensi telah ditambah');
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data['tgl']=$request->tgl;
        $data['jenis_tes']=$request->jenis;
        $data['bidang']=$request->bid;
        $data['nilai']=$request->nilai;
        
        $cek=DB::table('sia_nilai')->where('id',$id)->update($data);
        
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Absensi telah diubah');
        }
    }

    public function destroy($id) 
    { 
        $data = nilai::where('id', $id);
        $data->delete();
        return redirect()->back()->with('success', 'Data Absensi telah dihapus');
    }
}
