<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function utama(){
        return view('welcome');
    }
    public function bio(){
        return view('halaman.biodata');
    }
}
