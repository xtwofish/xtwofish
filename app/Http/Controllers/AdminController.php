<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apply;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }
//    public function admin()
//    {
//        return view('admin');
//    }
    public function Show(){
        $applys=Apply::where('status', '0')->get();
        return view('admin',compact('applys'));
    }

    public function completed(Request $request)
    {
        $fix = Apply::find($request->id);
        $fix->status=true;
        $fix->save();
        $applys = Apply::all()->where('id',$request->id);
        return redirect()->route('admin.index');

    }
    public function refuse(Request $request)
    {
        $fix = Apply::find($request->id);
        $fix->status=2;
        $fix->save();
        $applys = Apply::all()->where('id',$request->id);
        return redirect()->route('admin.index');

    }
    public function destroy($id)
    {
        Apply::destroy($id);
        return redirect()->route('admin.index');
    }
}
