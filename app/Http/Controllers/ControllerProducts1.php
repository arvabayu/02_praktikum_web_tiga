<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerProducts1 extends Controller
{
    public function kategori1(){
        return redirect("https://www.educastudio.com/category/marbel-edu-games");
    }
    public function kategori2(){
        return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
    }
    public function kategori3(){
        return redirect("https://www.educastudio.com/category/riri-story-books");
    }
    public function kategori4(){
        return redirect("https://www.educastudio.com/category/kolak-kids-songs");
    }
}
