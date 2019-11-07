<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use App\Fitur\ringmat;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

use File;

class ringmatC extends Controller
{
    public function index() 
    { 
        $sia_cabang = DB::table('sia_cabang')
            ->get();
        $yo = DB::table('sia_cabang')
            ->get();
        $ye = DB::table('sia_kelas')
            ->get();
        $ntpa = DB::table('sia_ringmat')
            ->get();
        return view('fringkasan.index')->with(compact('sia_cabang', 'yo', 'ye', 'ntpa'));
    }

    public function RPost(Request $request)
    {
        // dd($request);       
        // validasi
		$this->validate($request, [
			'file' => 'required|mimes:pdf'
        ]);
        
        $data = new ringmat();  
        $data->id_cbg = $request->cbg;
        $data->id_kls = $request->kls;
        $data->name = $request->name;
        $data->desc = $request->desc;

        $file_ttd1  = $request->file('file');
        $fileName1   = $file_ttd1->getClientOriginalName();
        $request->file('file')->move("file_upload/ringmat/", $fileName1);
        $data->file = "file_upload/ringmat/".$fileName1;
        // dd($data);
        $data->save();
        
        if($data){ 
            return redirect()->back()->with('save-success', 'Data Jadwal telah ditambah');
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data1 = ringmat::where('id',$id)->first();

        $data['id_cbg']=$request->cbg;
        $data['id_kls']=$request->kls;
        $data['name']=$request->name;
        $data['desc']=$request->desc;
        
        if (empty($request->has('file'))){
            $data1->file = $data1->file;
        }
        else{
            
            File::delete($data1->file); //menghapus file lama
            $file_ttd1 = $request->file('file');
            $fileName1  = $file_ttd1->getClientOriginalName();
            $file_ttd1->move('file_upload/ringmat/',$fileName1);
            $data['file'] = "file_upload/ringmat/".$fileName1;
        }
        
        $cek=DB::table('sia_ringmat')->where('id',$id)->update($data);
        
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Jadwal telah diubah');
        }
    }

    public function destroy($id) 
    {  

        $data = ringmat::where('id',$id)->first();

        File::delete($data->file);
        
        $cek = ringmat::where('id',$id)->delete();

        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Jadwal telah diubah');
        }
    }
}
