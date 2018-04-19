<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply;
class ClassController extends Controller
{


    public function index($name)
    {
        $applys=Apply::where('class_id', $name)->get();
        return view('classtatus',compact('applys'));
    }

    //admin

    public function show($name)
    {
        $applys=Apply::where('class_id', $name)->get();
        return view('admin.classtatus',compact('applys'));
    }
}
