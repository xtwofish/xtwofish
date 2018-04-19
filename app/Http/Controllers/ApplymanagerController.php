<?php

namespace App\Http\Controllers;

use App\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplymanagerController extends Controller
{

    public function index()
    {
        $applys=Apply::where('user_name',  Auth::user()->name )->get();
//        $data=['applys'=>$applys];
        return view('applymanager',compact('applys'));
    }

    public function destroy($id)
    {
        Apply::destroy($id);
        return redirect()->route('applymanager.index');
    }


}
