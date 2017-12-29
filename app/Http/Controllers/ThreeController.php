<?php

namespace App\Http\Controllers;
use App\Apply;
use Illuminate\Http\Request;

class ThreeController extends Controller
{
    public function three()
    {
        return view('three');
    }

    public function index()
    {
//        $applys=Apply::all();
        $applys=Apply::where('class_id', 'M503')->get();
//        $data=['applys'=>$applys];
        return view('three',compact('applys'));
    }


    public function page()
    {
        return view('admin.three');
    }

    public function show()
    {
//        $applys=Apply::all();
        $applys=Apply::where('class_id', 'M503')->get();
//        $data=['applys'=>$applys];
        return view('admin.three',compact('applys'));
    }

}