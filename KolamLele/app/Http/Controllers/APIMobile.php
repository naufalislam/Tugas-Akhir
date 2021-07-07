<?php

namespace App\Http\Controllers;

use App\Data;
use App\Kolam;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class APIMobile extends Controller
{
    //
    public function login(Request $request ){
        $user = User::where('email', $request->username)->first();
        if ($user) {

            if (password_verify($request->password, $user->password)) {
                return response()->json([
                    'status'=>true,
                    'pesan'=>'success',
                    'dataLogin'=>$user
                ]);
            }
            return $this->error('Kata Sandi Salah');
        }
        return $this->error('Username Tidak Terdaftar');
    }
    public function error($pesan){
        return response()->json([
            'status'=>false,
            'pesan'=>$pesan
        ]);
    }
    public function riwayat($alat)
    {
        // Data::create(['ph'=> rand(3,11),'suhu1'=> rand(10,80),'suhu2'=> rand(10,80),'suhu3'=> rand(10,80),'suhu4'=> rand(10,80),'kolam'=> '2']);

        $data = Data::latest()->where('kolam',$alat)->get()->sortByDesc('id');
        // $last = Data::latest()->take(1)->get()->sortBy('id');
        // $waktu = $data->pluck('created_at');
        $riwayat= array();
        $d['id']= array();
        $d['kolam']= array();
        $d['ph']= array();
        $d['suhu1']= array();
        $d['suhu2']= array();
        $d['suhu3']= array();
        $d['suhu4']= array();
        $d['waktu']= array();
        foreach ($data as $key => $value) {
            $waktu =$value['created_at'];;
            $waktu =Carbon::createFromDate("$waktu")->toDateTimeString();
            $d['id']= $value['id'];
            $d['kolam']=$value['kolam'];
            $d['ph']=$value['ph'];
            $d['suhu1']=$value['suhu1'];
            $d['suhu2']=$value['suhu2'];
            $d['suhu3']=$value['suhu3'];
            $d['suhu4']=$value['suhu4'];
            $d['waktu']= $waktu;
            array_push($riwayat,$d);
        };
        return response()->json(['data'=>$riwayat]);
    }
    public function terkini($alat)
    {
        // Data::create(['ph'=> rand(3,11),'suhu1'=> rand(10,80),'suhu2'=> rand(10,80),'suhu3'=> rand(10,80),'suhu4'=> rand(10,80),'kolam'=> '2']);

        $data = Data::latest()->where('kolam',$alat)->take(1)->get()->sortByDesc('id');
        // $last = Data::latest()->take(1)->get()->sortBy('id');
        // $waktu = $data->pluck('created_at');
        $riwayat= array();
        $d['id']= array();
        $d['kolam']= array();
        $d['ph']= array();
        $d['suhu1']= array();
        $d['suhu2']= array();
        $d['suhu3']= array();
        $d['suhu4']= array();
        $d['waktu']= array();
        foreach ($data as $key => $value) {
            $waktu =$value['created_at'];;
            $waktu =Carbon::createFromDate("$waktu")->toDateTimeString();
            $d['id']= $value['id'];
            $d['kolam']=$value['kolam'];
            $d['ph']=$value['ph'];
            $d['suhu1']=$value['suhu1'];
            $d['suhu2']=$value['suhu2'];
            $d['suhu3']=$value['suhu3'];
            $d['suhu4']=$value['suhu4'];
            $d['waktu']= $waktu;
            array_push($riwayat,$d);
        };
        return response()->json(['data'=>$riwayat]);
    }

    public function kolam($id)
    {
        //
        $data = Kolam::latest()->where('pemilik',$id)->get();
        return response()->json(['data'=>$data]);
    }

}
