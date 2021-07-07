<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;
use App\Data;

class ChartsApiController extends Controller
{
    //
    public function index($id)
    {
        // Data::create(['ph'=> rand(3,11),'suhu1'=> rand(10,80),'suhu2'=> rand(10,80),'suhu3'=> rand(10,80),'suhu4'=> rand(10,80),'kolam'=> '2']);

        $data = Data::latest()->where('kolam',$id)->take(30)->get()->sortBy('id');
        // $last = Data::latest()->take(1)->get()->sortBy('id');
        // $waktu = $data->pluck('created_at');
        $jam= array();
        foreach ($data as $key => $value) {
            $time =$value['created_at'];
            $time =Carbon::createFromDate("$time")->toTimeString();
            array_push($jam,$time
            // Carbon::createFromDate($key['created_at'])->toTimeString())
             );
        };
        $ph = $data->pluck('ph');
        $suhu1 = $data->pluck('suhu1');
        $suhu2 = $data->pluck('suhu2');
        $suhu3 = $data->pluck('suhu3');
        $suhu4 = $data->pluck('suhu4');
        return response()->json(['waktu'=>$jam,'suhu1'=>$suhu1,'suhu2'=>$suhu2,'suhu3'=>$suhu3,'suhu4'=>$suhu4, 'ph'=>$ph]);
    }
}
