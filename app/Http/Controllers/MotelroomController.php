<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motelroom;


class MotelroomController extends Controller
{
    public function getDanhSachDKD(){
        $dspt = Motelroom::where('status',1)->get();
        return view('admin.views.administration.motelroom',['dspts'=>$dspt]);
        
    }
    public function getDanhSachCKD(){
        $dsptckd = Motelroom::where('status',0)->get();
         return view('admin.views.administration.approve',['dsptckds'=>$dsptckd]); 
       
    }

    public function postKiemDuyet(Request $request,$id){
        $ptckd = Motelroom::find($id);
        $ptckd->status = 1;
        $ptckd->save();
        return redirect()->back();
    }
    
    
    public function anBaiDang($id){
        $post = Motelroom::find($id);
        $post->status = 2;
        $post->save();
        return redirect()->back()->with('thongbao','Ẩn Thành Công');;
    }

}
