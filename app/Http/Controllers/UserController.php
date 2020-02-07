<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getList(){
        $user = User::all();
        return view('admin.views.administration.user',['nguoidungs'=>$user]);
    }
    public function getChangeUser($id){
        // $user = users::find($id);
        // return view('Admin.Page.user.change_user',['nguoidungs'=>$user]);
    }
    
    public function postChangeUser(Request $request,$id){
        // $nguoidung = users::find($id);
        // $nguoidung->right = $request ->Quyen;
        // $nguoidung->status =$request->TinhTrang;
        // $nguoidung->save();
        // return redirect('admin/nguoidung/change_user/'.$id)->with('thongbao','Sửa Thành Công');
    }
}
