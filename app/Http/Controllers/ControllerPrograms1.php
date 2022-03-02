<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPrograms1 extends Controller

{
    public function karir(){
        return view("karir");
        
    }

    public function magang(){
        return view('magang');  
    }

    public function kunjunganIndustri(){
        return view('kunjungan-Industri');
    }
}
