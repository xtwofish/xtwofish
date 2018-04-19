<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
class HouseController extends Controller

{
    public function house()
    {
        $class =Classroom::all();
        return view('house',compact('class'));

    }

}