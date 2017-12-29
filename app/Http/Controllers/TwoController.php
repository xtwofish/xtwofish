<?php

namespace App\Http\Controllers;
use App\Apply;
use Illuminate\Http\Request;

class TwoController extends Controller
{
    public function two()
    {
        return view('two');
    }

    public function index()
    {
//        $applys=Apply::all();
        $applys=Apply::where('class_id', 'M502')->get();
//        $data=['applys'=>$applys];
        return view('two',compact('applys'));
    }

    //admin
    public function page()
    {
        return view('admin.two');
    }

    public function show()
    {
//        $applys=Apply::all();
        $applys=Apply::where('class_id', 'M502')->get();
//        $data=['applys'=>$applys];
        return view('admin.two',compact('applys'));
    }

}


