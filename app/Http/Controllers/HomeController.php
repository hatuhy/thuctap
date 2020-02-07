<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.views.home');
    }
    
    
    public function getDangXuat(){
        Auth::logout();
        return redirect('dangnhap');
    }
   
    // login simple
    public function getDangNhap(){
        return view('client.views.login');
    }

    public function postDangNhap(Request $request){
        $this->validate($request,
        [
            'user'=>'required',
            'pass'=>'required',
        ],
        [
            'user.required'=>'Bạn chưa nhập tài khoản',
            'pass.required'=>'Bạn chưa nhập mật khẩu',
        ]);
        $notification = array(
            'message' =>'Đăng nhập thành công',
            'alert-type'=>'success'
        );
        if(Auth::attempt(['email'=>$request->user,'password'=>$request->pass])){
            if(Auth::check()){
                if(Auth::user()->role==1)
                    return redirect('admin')->with($notification);
                else
                    return redirect('index');
            }
            
        }
        else
        {
            return redirect('dangnhap');
        }
    }

    public function postDangki(Request $request){

        $this->validate($request,
    		[
    			'name' => 'required|min:2|max:33|',
    			'Email'=>'required|email|unique:users,email',
    			'pass'=>'required|min:4|max:30',
    			'passagain'=>'required|same:pass',
    		],
    		[
    			'name.required'=>'Chưa nhập họ tên',
    			'name.min'=>'Độ dài họ tên phải từ 2->33',
    			'name.max'=>'Độ dài tên thể loại phải từ 2-33',
    			'Email.required'=>'Chưa nhập email',
    			'Email.email'=>'Nhập sai định dạng email',
    			'Email.unique'=>'Email đã tồn tại',
    			'pass.required'=>'Chưa nhập password',
    			'pass.min'=>'Độ dài password phải từ 4->30',
    			'pass.max'=>'Độ dài password phải từ 4->30',
    			'passagain.same'=>'Xác nhận mật khẩu sai',
    		]);
        $user = new User;
        $user->email = $request->Email;
        $user->password = bcrypt($request->pass);
        $user->name = $request->name;
        $user->save();
        $notification = array(
            'message' =>'Đăng kí thành công',
            'alert-type'=>'success'
        );
        return redirect('dangki')->with($notification);

    }
}
