<?php

namespace App\Http\Controllers;

use App\Apply;
use Illuminate\Http\Request;

class ApplymanagerController extends Controller
{
    public function applymanager()
    {
        return view('applymanager');
    }

    public function index()
    {
        $applys=Apply::all();
//        $applys=Apply::where('user_name', '咪咪')->get();
//        $data=['applys'=>$applys];
        return view('applymanager',compact('applys'));
    }

    public function destroy($id)
    {
        Apply::destroy($id);
        return redirect()->route('applymanager.index');
    }


}
