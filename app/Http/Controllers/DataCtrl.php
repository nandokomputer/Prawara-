<?php

namespace App\Http\Controllers;

use App\Models\TabelData;
use Illuminate\Http\Request;

class DataCtrl extends Controller
{
    public function tampil(){
        $data_tabel=TabelData::all();
        return view ('tabel/data')->with('data_arr',$data_tabel);
       }
       public function add(Request $request){
        TabelData::create($request->all());
             return redirect('/data')->with('sukses','Data telah ditambahkan  !');
       }
       public function update(Request $request){
          $data_tabel=TabelData::findOrFail($request->id);
          $data_tabel->update($request->all());
          return redirect('/data')->with('sukses','Data telah diedit  !');
      }
      public function delete(Request $request){
          $data_tabel=TabelData::findOrFail($request->id);
          $data_tabel->delete();
          return redirect('/data')->with('sukses','Data telah dihapus  !');
      }
}
