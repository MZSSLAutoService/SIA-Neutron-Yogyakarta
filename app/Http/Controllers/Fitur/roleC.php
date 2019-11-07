<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use App\Fitur\role;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class roleC extends Controller
{
    public function index() 
    { 
        $role = DB::table('sia_role')
            ->get();
        return view('master.mrole.index')->with(compact('role'));
    } 

    public function RPost(Request $request)
    {
        // dd($request);
        $m = 0;
        if($request->name == "admin"){
            $no = $m + 1;
            $kode = "A$no";
        }elseif($request->name == "cabang"){
            $no = $m + 2;
            $kode = "A$no";
        }elseif($request->name == "siswa"){
            $no = $m + 3;
            $kode = "A$no";
        }else{
            $no = $m + 1;
            $kode = "B$no";
        }

        $data = new role();
        $data->kode = $kode;
        $data->name = $request->name;

        // dd($data);
        $data->save();

        if($data){ 
            return redirect()->back()->with('save-success', 'Data Siswa telah ditambah');
        }
    }
}
