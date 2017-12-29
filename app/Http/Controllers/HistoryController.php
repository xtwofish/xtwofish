<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply;

class HistoryController extends Controller
{
    public function history()
    {
        return view('history');
    }

    public function Show(){
        $applys=Apply::all();
        return view('history',compact('applys'));
    }
}