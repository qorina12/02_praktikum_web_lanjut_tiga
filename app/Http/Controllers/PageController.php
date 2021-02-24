<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //home
    public function index (){
        echo 'Selamat Datang';

    }
    //about
    public function about (){
        echo 'Nama : Qorina Anindhita Prameswari <br> NIM :1941720049';

        
    }
    //artikel
    public function artikel ($id){
        echo 'Halaman artikel dengan ID '.$id;
        
    }
}
