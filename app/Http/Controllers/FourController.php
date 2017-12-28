<?php

namespace App\Http\Controllers;
use App\Apply;
use Illuminate\Http\Request;

class FourController extends Controller
{
    public function four()
    {
        return view('four');
    }

    public function index()
    {
//        $applys=Apply::all();
        $applys=Apply::where('class_id', 'M504')->get();
//        $data=['applys'=>$applys];
        return view('four',compact('applys'));
    }

    public function destroy($id)
    {
        Apply::destroy($id);
        return redirect()->route('four.index');
    }


}