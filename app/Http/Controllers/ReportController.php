<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
class ReportController extends Controller
{
    //
    public function getList(){
        $post = Report::where('status',0)->get();
        return view('admin.views.report.post',['posts'=>$post]);
    }
    public function getAccount(){
        $post = Report::where('status',0)->get();
        return view('admin.views.report.post',['posts'=>$post]);
    }
    
}
