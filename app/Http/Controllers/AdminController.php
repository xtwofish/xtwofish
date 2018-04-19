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
//        $applys=Apply::all();
        $applys=Apply::where('status', '0')->get();
        return view('admin',compact('applys'));
    }
    public function update($id)
    {
        $fix = Apply::find($id);
        switch ($fix['status']){
            case '0':
                    $fix->status=true;
                    $fix->save();
                    return back()->with('success','您已同意申請 !');
                break;
            default:
                $fix->status=false;
                $fix->save();
                return back()->with('error','您已拒絕申請 !');
                break;
        }
        $applys = Apply::all()->where('id',$id);
        return view('admin.admin',compact('applys'));
    }

    public function destroy($id)
    {
        Apply::destroy($id);
        return redirect()->route('admin.index');
    }
}
