<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController1 extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function about(){
        echo "Nama : Arva Bayu Susanto</br>NIM : 2041720116";
    }

    public function articles($id){
        echo "Halaman Artikel dengan ID " . $id;
    }
}
