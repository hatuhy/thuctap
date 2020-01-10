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

});
// danh sach chua kiem duyet
Route::get('approve',function(){
    return view('admin.views.administration.approve');
});
// danh sach nguoi dung tham gia he thong
Route::get('user',function(){
    return view('admin.views.administration.user');
});
// danh sach phong tro , nha tro , hometstay,...
Route::get('motelroom',function(){
    return view('admin.views.administration.motelroom');
});
// danh sach nhung bai dang sai thong tin (can xu ly )
Route::get('post',function(){
    return view('admin.views.report.post');
});
// danh sach nhung tai khoan vi pham (can xu ly)
Route::get('account',function(){
    return view('admin.views.report.account');
});

// danh sach gop y cua moi nguoi ve he thong
Route::get('opinion',function(){
    return view('admin.views.version.opinion');
});
// danh sach ban update va dinh huong phat trien
Route::get('update',function(){
    return view('admin.views.version.update');
});