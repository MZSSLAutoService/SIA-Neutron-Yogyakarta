<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use App\Fitur\event;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class eventC extends Controller
{
    public function index() 
    { 
        $sia_cabang = DB::table('sia_cabang')
            ->get();
        $yo = DB::table('sia_cabang')
            ->get();
        $ntpa = DB::table('sia_event')
            ->get();
        return view('fevent.index')->with(compact('sia_cabang', 'yo', 'ntpa'));
    }

    public function EPost(Request $request)
    {
        // dd($request);
        $data = new event();  
        $data->id_cbg = $request->cbg;
        $data->name = $request->name;
        $data->desc = $request->desc;
        $data->tgl = $request->tgl;
        $data->jam = $request->jam;
        $data->loc = $request->loc;
        $data->lat = $request->lat;
        $data->long = $request->long;
        // dd($data);
        $data->save();
        
        if($data){ 
            return redirect()->back()->with('save-success', 'Data Absensi telah ditambah');
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data['id_cbg']=$request->cbg;
        $data['name']=$request->name;
        $data['desc']=$request->desc;
        $data['tgl']=$request->tgl;
        $data['jam']=$request->jam;
        $data['loc']=$request->loc;
        
        $cek=DB::table('sia_event')->where('id',$id)->update($data);
        
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Jadwal telah diubah');
        }
    }

    public function destroy($id) 
    { 
        $data = event::where('id', $id);
        $data->delete();
        return redirect()->back()->with('success', 'Data Absensi telah dihapus');
    }
}
