<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use App\Fitur\jadwal;
use App\Fitur\JadwalImport;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class jadwalC extends Controller
{
    public function index() 
    { 
        $sia_cabang = DB::table('sia_cabang')
            ->get();
        $jwl = DB::table('sia_jadwal')
            ->get();
        $yo = DB::table('sia_cabang')
            ->get();
        return view('fjadwal.index')->with(compact('sia_cabang', 'jwl', 'yo'));
    } 

    public function JPost(Request $request)
    {
        // dd($request);
        $data = new jadwal();
        $data->id_cbg = $request->cbg;
        $data->kelas = $request->kls;
        $data->from = $request->from;
        $data->to = $request->to;
        $data->mapel = $request->bidstudi;
        $data->ruang = $request->ruang;
        // dd($data);
        $data->save();
        
        if($data){ 
            return redirect()->back()->with('save-success', 'Data Jadwal telah ditambah');
        }
    }

    public function JImport(Request $request)
    {
        // dd($request);
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_upload/ejadwal/',$nama_file);
 
		// import data
        $data = Excel::import(new JadwalImport, public_path('/file_upload/ejadwal/'.$nama_file));
                
        if($data){ 
            return redirect()->back()->with('save-success', 'Data Jadwal telah ditambah');
        }
    }
    
    public function JDelete(Request $request)
    {
        // dd($request);
        $data = DB::table('sia_jadwal')->delete();

        if($data){ 
            return redirect()->back()->with('save-success', 'Data Jadwal telah ditambah');
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data['kelas']=$request->kls;
        $data['from']=$request->from;
        $data['to']=$request->to;
        $data['mapel']=$request->bidstudi;
        $data['ruang']=$request->ruang;
        
        $cek=DB::table('sia_jadwal')->where('id',$id)->update($data);
        
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Jadwal telah diubah');
        }
    }

    public function destroy($id) 
    { 
        $data = jadwal::where('id', $id);
        $data->delete();
        return redirect()->back()->with('success', 'Data Jadwal telah dihapus');
    }
}
