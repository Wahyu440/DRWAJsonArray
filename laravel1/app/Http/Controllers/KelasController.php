<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller{
    public function index(){
        $post = DB::table('kelas')->get();

        return response()->json([
            'kelas' => $post            
        ], 200);
    }

    public function filter($id){
        $post = DB::table('kelas')->where('id_kelas',$id)->get();

        return response()->json([
            'kelas' => $post            
        ], 200);
    	return $id;
    }

    public function insertDataGuru (request $req){
        DB::table('guru')->insert([
            'rfid' => $req->input('rfid'),
            'nip' => $req->input('nip'),
            'nama_guru' => $req->input('nama_guru'),
            'alamat' => $req->input('alamat'),
            'status_guru' => 1
        ]);
        return response()->json(
            ["Result"=>
                [
                    "ResultCode"=> 0,
                    "ResultMessage"=>"Success, Data Sudah Masuk"
                    ]
                ], 200
        );
    }

    // public function deleteDataGuru (request $req){
    //     DB::table('guru')->where('id_guru', $req->input('id_guru'))->delete();
    //     return response
    // }
}

?>