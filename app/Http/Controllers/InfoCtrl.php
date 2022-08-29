<?php

namespace App\Http\Controllers;

use App\Models\TabelInfo;
use Illuminate\Http\Request;
use App\Gambar;

class InfoCtrl extends Controller
{
    public function tampil(){
        $data_tabel=TabelInfo::all();
        return view ('tabel/info')->with('info_arr',$data_tabel);
       }
    public function add(Request $request){
          TabelInfo::create($request->all());
          return redirect('/info')->with('sukses','info telah ditambahkan  !');
       }
       public function edit(Request $request){
          $data_tabel=TabelInfo::findOrFail($request->id);
          $data_tabel->update($request->all());
          return redirect('/info')->with('sukses','info telah diedit  !');
      }
      public function hapus(Request $request){
          $data_tabel=TabelInfo::findOrFail($request->id);
          $data_tabel->delete();
          return redirect('/info')->with('sukses','info telah dihapus  !');
      }
      public function coba(){
        return view ('tabel/tampil');
      }
      public function data(){
        return view ('tabel/data');
      }
}
