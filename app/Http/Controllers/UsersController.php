<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $data = Users::orderBy('nama_lengkap','asc')->get();
        return response()->json([
            'status'=>true,
            'message'=>'Data Siswa',
            'data'=>$data
        ]);
    }
}
 