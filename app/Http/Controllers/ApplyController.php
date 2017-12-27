<?php

namespace App\Http\Controllers;

use App\Apply;
use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function apply()
    {
        return view('apply');
    }

    public function store(Request $request)
    {
        //將表單送過來的資料用 Model 寫入資料庫
        Apply::create($request->all());
        //設定頁面跳轉
        return redirect('/apply')->with('response','已收到教室申請 !');
    }

}
