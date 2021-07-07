<?php

namespace App\Http\Controllers;

use App\Kolam;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        //
        $data = User::latest()->where('rule','1')->get();
        $kolam = Kolam::latest()->get();
        return view('admin/user/index',['alat'=>$data,'kolam'=>$kolam]);
    }
    // public function store(Request $request)
    // {
    //     //
    //     Alat::create([
    //         'alat'=>$request->alat,
    //         ]);
    //     return redirect("/alat");
    // }
    // public function destroy($id)
    // {
    //     //
    //     Alat::find($id)->delete();
    //     return redirect("/alat");
    // }
}
