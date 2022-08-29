<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCtrl extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function dash(){
        return view('admin');
    }
    public function widget(){
        return view('admin/widget');
    }
    public function form(){
        return view('admin/form');
    }
    public function tabel(){
        return view('admin/table');
    }
}
