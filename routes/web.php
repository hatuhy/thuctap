<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('admin', function () {
    return view('admin.views.home.index');

})->name('thongke');
// danh sach chua kiem duyet

Route::get('nguoi-dung/danh-sach',function(){
    return view('admin.views.administration.user');
});
Route::get('cuser',function(){
    return view('admin.views.user.change_user');
});
// danh sach nguoi dung tham gia he thong

Route::group(['prefix'=>'nguoi-dung'],function(){
    Route::get('danh-sach','UserController@getList')->name('danhsachnd');
    Route::get('change_user/{id}','UserController@getChangeUser')->name('suand');
    Route::post('change_user/{id}','UserController@postChangeUser')-> name('suanguoidung');
    Route::get('danh-sach-vi-pham','ReportController@getList')->name('rep-account');
}); 
// danh sach phong tro , nha tro , hometstay,...

Route::group(['prefix'=>'bai-dang'],function(){
    Route::get('da-kiem-duyet','MotelroomController@getDanhSachDKD')-> name('dspost');
    Route::get('xoa/{id}','MotelroomController@anBaiDang')-> name('anbaidang');
    Route::get('chua-kiem-duyet','MotelroomController@getDanhSachCKD')->name('approve');
    Route::get('kiem-duyet/{id}','MotelroomController@postKiemDuyet')-> name('kiemduyet');
    Route::get('danh-sach-vi-pham','ReportController@getList')->name('rep-post');
}); 



// danh sach nhung bai dang sai thong tin (can xu ly )





// danh sach gop y cua moi nguoi ve he thong

Route::get('opinion',function(){
    return view('admin.views.version.opinion');
})->name('opinion');

// danh sach ban update va dinh huong phat trien

Route::get('update',function(){
    return view('admin.views.version.update');
})->name('update');

Route::get('profile',function(){
    return view('admin.views.profile.profile');
})->name('profile');
// Route::get('dangnhap',function(){
//     return view('client.views.login');
// });
//logout
Route::get('dangxuat','HomeController@getDangXuat')->name('dangxuat');
    //register
Route::get('dangki',function(){
    return view('client.views.register');
});

Route::post('dangki','HomeController@postDangKi')->name('post-dangki');
//login
route::get('dangnhap','HomeController@getDangNhap')->name('login');
route::post('dangnhap','HomeController@postDangNhap');
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider1');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback1');
