<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Nama saya Mohammad Roihan Al Fahmi, NIM saya adalah 2341720097';
    }
    public function articles($id){
        return 'Halaman articles dengan ID '. $id;
    }
}
