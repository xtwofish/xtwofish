<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    public function Show(){
        $applys=Apply::all();
        return view('admin',compact('applys'));
    }
}
