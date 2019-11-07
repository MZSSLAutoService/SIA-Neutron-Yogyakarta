<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use App\Fitur\tugas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

use File;

class tugasC extends Controller
{
    public function index() 
    { 
        $sia_cabang = DB::table('sia_cabang')
            ->get();
        $yo = DB::table('sia_cabang')
            ->get();
        $ye = DB::table('sia_kelas')
            ->get();
        $yi = DB::table('sia_siswa')
            ->get();
        $ntpa = DB::table('sia_tugas')
            ->get();
        return view('ftugas.index')->with(compact('sia_cabang', 'yo', 'ye', 'yi', 'ntpa'));
    }

    public function TPost(Request $request)
    {
        // dd($request);       
        // validasi
		// $this->validate($request, [
		// 	'file' => 'required|mimes:pdf'
        // ]);
        
        $data = new tugas();  
        $data->id_cbg = $request->cbg;
        $data->id_kls = $request->kls;
        $data->id_siswa = $request->siswa;
        $data->name = $request->name;
        $data->desc = $request->desc;

        $file_ttd1  = $request->file('file');
        $fileName1   = $file_ttd1->getClientOriginalName();
        $request->file('file')->move("file_upload/tugas/", $fileName1);
        $data->file = "file_upload/tugas/".$fileName1;
        // dd($data);
        $data->save();
        
        if($data){ 
            return redirect()->back()->with('save-success', 'Data Jadwal telah ditambah');
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data1 = tugas::where('id',$id)->first();

        $data['id_cbg']=$request->cbg;
        $data['id_kls']=$request->kls;
        $data['id_siswa']=$request->siswa;
        $data['name']=$request->name;
        $data['desc']=$request->desc;
        
        if (empty($request->has('file'))){
            $data1->file = $data1->file;
        }
        else{
            
            File::delete($data1->file); //menghapus file lama
            $file_ttd1 = $request->file('file');
            $fileName1  = $file_ttd1->getClientOriginalName();
            $file_ttd1->move('file_upload/tugas/',$fileName1);
            $data['file'] = "file_upload/tugas/".$fileName1;
        }
        
        $cek=DB::table('sia_tugas')->where('id',$id)->update($data);
        
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Jadwal telah diubah');
        }
    }

    public function destroy($id) 
    {  

        $data = tugas::where('id',$id)->first();

        File::delete($data->file);
        
        $cek = tugas::where('id',$id)->delete();

        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Jadwal telah diubah');
        }
    }
}
