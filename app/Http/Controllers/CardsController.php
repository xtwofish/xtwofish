<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classroom;
class CardsController extends Controller
{
    public function cards()
    {
        $class =Classroom::all();
        return view('cards',compact('class'));

    }
}