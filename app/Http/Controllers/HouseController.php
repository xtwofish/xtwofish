<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HouseController extends Controller

{
    public function house()
    {
        return view('house');
    }
}