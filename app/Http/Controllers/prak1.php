<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prak1 extends Controller
{
    public function homeku (){
        return view("home0146");
    }
    public function artikelku (){
        return view("Artikel0146");
    }
    public function contakku (){
        return view("contakus0146");
    }
}
