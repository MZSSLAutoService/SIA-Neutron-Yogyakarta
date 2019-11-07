<?php

namespace App\Http\Controllers\Fitur;
use App\Http\Controllers\Controller;

use App\Fitur\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

class userC extends Controller
{
    public function index() 
    { 
        $user = DB::table('users')
            ->get();
        $yo = DB::table('sia_cabang')
            ->get();
        $ye = DB::table('sia_role')
            ->get();
        return view('master.muser.index')->with(compact('user', 'yo', 'ye'));
    } 

    public function UPost(Request $request)
    {
        // dd($request);
        $data = new user();
        
        if($request->role == "A2"){
            $data->id_cabang = $request->cbg;
        }else{
            $data->id_cabang = null;
        }

        $data->id_role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        
        if($request->password == $request->repassword){
            $data->password = bcrypt($request->password);
        }else{
            return redirect()->back();
        }

        // dd($data);
        $data->save();

        if($data){ 
            return redirect()->back()->with('save-success', 'Data Siswa telah ditambah');
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['username']=$request->username;
        
        if($request->role == "A2"){
            $data['id_cabang'] = $request->cbg;
        }else{
            $data['id_cabang'] = null;
        }

        $data['id_role'] = $request->role;

        if($request->password == $request->repassword){
            $data['password'] = bcrypt($request->password);
        }elseif($request->oldpassword == $request->password){
            return redirect()->back();
        }else{
            return redirect()->back();
        }
        
        // dd($data);
        $cek=DB::table('users')->where('id',$id)->update($data);
        
        if($cek){ 
            return redirect()->back()->with('edit-success', 'Data Jadwal telah diubah');
        }
    }
}
