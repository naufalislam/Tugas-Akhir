<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class ApiController extends Controller
{
    //
    public function post(Request $request){
        $ph= $request->get("ph");
        $suhu1= $request->get("suhu1");
        $suhu2= $request->get("suhu2");
        $suhu3= $request->get("suhu3");
        $suhu4= $request->get("suhu4");
        $kolam= $request->get("kolam");
        Data::create(['ph'=>$ph,'suhu1'=>$suhu1,'suhu2'=>$suhu2,'suhu3'=>$suhu3,'suhu4'=>$suhu4,'kolam'=>$kolam,]);
    }
}
