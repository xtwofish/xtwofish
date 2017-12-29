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

    public function completed(Request $request)
    {
        $fix = Apply::find($request->id);
        $fix->status=true;
        $fix->save();
        $applys = Apply::all()->where('id',$request->id);
        return view('admin',compact('applys'));

    }

    public function destroy($id)
    {
        Apply::destroy($id);
        return redirect()->route('admin.index');
    }
}
