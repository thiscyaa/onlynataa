<?php

namespace App\Http\Controllers;

use id;
use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $data = guru::all();
        return view('dataguru' , compact('data'));
    }

    public function tambahguru(Request $request){

        return view('tambahguru');
    }

    public function inputguru(Request $request){
        Guru :: create($request ->all());
        return redirect()->route('guru');
    }

    public function tampilguru($id){
        $data = Guru::find($id);
        return view('tampilguru',compact('data'));
    }

    public function updateguru(Request $request, $id) {
        guru::query()->where('id', $id)->update([
            "kode_guru" => $request->input('kode_guru'),
            "nama_guru" => $request->input('nama_guru'),
            "mapel" => $request->input('mapel'),
        ]);

        return redirect('/guru');
    }

    public function hapusguru($id){
        $data = guru::find($id)->delete();

        return redirect('/guru');
    }
}
