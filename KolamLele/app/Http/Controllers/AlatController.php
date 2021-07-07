<?php

namespace App\Http\Controllers;

use App\Alat;
use App\Kolam;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    //
    public function index()
    {
        //
        $data = Alat::latest()->get();
        $kolam = Kolam::latest()->get();
        return view('admin/alat/index',['alat'=>$data,'kolam'=>$kolam]);
    }
    public function store(Request $request)
    {
        //
        Alat::create([
            'alat'=>$request->alat,
            ]);
        return redirect("/alat");
    }
    public function destroy($id)
    {
        //
        Alat::find($id)->delete();
        return redirect("/alat");
    }
}
