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
    public function submit(Request $request){
       $name = $request['name'];
       $name1 = $request['name1'];

       return view('halaman.home', ['nama' => $name, 'name1' => $name1 ]);
    }
}
