<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Opinion;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getList(){
        $user = User::all();
        return view('admin.views.administration.user',['nguoidungs'=>$user]);
    }
    public function getChangeUser($id){
        $nguoidung = User::find($id);
        return view('admin.views.user.change_user',['nguoidungs'=>$nguoidung]);
    }
    
    public function postChangeUser(Request $request,$id){
        $nguoidung = User::find($id);
        $nguoidung->role = $request ->Quyen;
        $nguoidung->status =$request->TinhTrang;
        $nguoidung->vip =$request->Vip;
        $nguoidung->save();
        return redirect('user/change_user/'.$id)->with('thongbao','Sửa Thành Công');
    }
    public function lockUser(Request $request,$id){
        $nguoidung = User::find($id);
        $nguoidung->status = 0;
        $nguoidung->save();
        return redirect('user/lock_user/'.$id)->with('thongbao','Khóa Thành Công');
    }
    public function unLockUser(Request $request,$id){
        $nguoidung = User::find($id);
        $nguoidung->status = 0;
        $nguoidung->save();
        return redirect('user/unlock_user/'.$id)->with('thongbao','Mở Khóa Thành Công');
    }
    // gop y cua ng dung
    public function getOpinion(){
            $op = Opinion::all();
            return view('admin.views.version.opinion',['ops'=>$op]);
    }
   
}
