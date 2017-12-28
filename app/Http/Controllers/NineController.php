<?php

namespace App\Http\Controllers;
use App\Apply;
use Illuminate\Http\Request;

class NineController extends Controller
{
    public function nine()
    {
        return view('nine');
    }

    public function index()
    {
//        $applys=Apply::all();
        $applys=Apply::where('class_id', 'M509')->get();
//        $data=['applys'=>$applys];
        return view('nine',compact('applys'));
    }

    public function destroy($id)
    {
        Apply::destroy($id);
        return redirect()->route('nine.index');
    }


}