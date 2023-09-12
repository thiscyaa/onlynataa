<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index(){
        $data = Kelas::all();

        return view('datakelas' , compact('data'));
    }

    public function tambahkelas(Request $request){

        return view('tambahkelas');
    }

    public function insertkelas(Request $request){
        DB::table('kelas')->insert([
            'namakelas' => $request->namakelas,
        ]);
        return redirect('kelas');
    }
}
