<?php

namespace App\Http\Controllers;

use App\Apply;
use Illuminate\Http\Request;

class OneController extends Controller
{
    public function one()
    {
        return view('one');
    }

    public function index()
    {
//        $applys=Apply::all();
        $applys=Apply::where('class_id', 'M501')->get();
//        $data=['applys'=>$applys];
        return view('one',compact('applys'));
    }



    //admin
    public function page()
    {
        return view('admin.one');
    }

    public function show()
    {
//        $applys=Apply::all();
        $applys=Apply::where('class_id', 'M501')->get();
//        $data=['applys'=>$applys];
        return view('admin.one',compact('applys'));
    }

}