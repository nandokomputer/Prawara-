<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisnakerCtrl extends Controller

{
    public function index(){
        return view('index', [
            "tittle" => "Beranda"
        ]);
    }
    public function bagian(){
        return view('bagian', [
            "tittle" => "Bagian"
        ]);
    }
    public function sub(){
        return view('sub', [
            "tittle" => "Data"
        ]);
    }
}
