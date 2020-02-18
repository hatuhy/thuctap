@extends('admin.layouts.main')
@section('title', 'Thay đổi thông tin')
@section('content')
<div class="card-container">
    <div class="upper-container">
        <div class="image-container">
            <img src="assets/admin/images/avatars/1.jpg" />
        </div>
    </div>

    <div class="lower-container">
        <div style="text-align: center;">
            <h3>Hà Văn Tú</h3>
            <h4>Admin</h4>
        </div>
        <div class="info">
            <a href="mailto:hatu1998hy@gmail.com">
                <p><i class="fas fa-envelope" style="font-size:20px; color:blue;    margin-right:13px;"></i>
                    hatu1998hy@gmail.com</p>
            </a>
            <p><i class="fas fa-lock" style="font-size:20px; color:blue;   margin-right: 20px;"></i>*********</p>
            <a href="tel://0376521198">
                <p><i class="fas fa-phone" style="font-size:20px; color:blue;   margin-right: 13px;"></i>
                    0376521198
                </p>
            </a>
            <p><i class="fas fa-map-marker-alt" style="font-size:20px; color:blue;     margin-right: 20px;"></i>Hoàn
                Long- Yên Mỹ -
                Hưng Yên</p>
        </div>
    </div>

    <div class="card-footer1">
        <div class="stats1">
            <div class="stat1">
                <span class="label">Following</span>
                <span class="value">56K</span>
            </div>
            <div class="stat1">
                <span class="label">Followers</span>
                <span class="value">940</span>
            </div>
            <div class="stat1">
                <span class="label">Likes</span>
                <span class="value">320</span>
            </div>
        </div>
    </div>

</div>
<div class="main-card mb-3 card">
    <div class="card-body" style="margin-bottom: 50px;">
        <h5 class="card-title"> Thay đổi thông tin người dùng</h5>
        @if(session('thongbao'))
        <div class="alert alert-success">
            {{ session('thongbao') }}
        </div>
        @endif
        <form action="user/change_user/{{$nguoidungs->id}}" method="POST">
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group"><label class="">Họ Tên</label><input name="name" id="Name"
                            placeholder="họ tên" type="Name" class="form-control" value="{{$nguoidungs->name}}"></div>
                </div>
                <div class="col-md-2" style="margin-left:62px">
                <div class="position-relative form-group"><label class="">Quyền</label>
                        <select class="form-control" name="Quyen">
                            <option <?php if ($nguoidungs->role == 0 ) echo 'selected' ; ?> value="0">User</option>
                            <option <?php if ($nguoidungs->role == 1 ) echo 'selected' ; ?> value="1">Admin
                            </option>
                            
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input
                            name="email" id="exampleEmail11" placeholder="with a placeholder" type="email"
                            class="form-control" value="{{$nguoidungs->email}}"></div>
                </div>
                <div class="col-md-2" style="margin-left:62px">
                    <div class="position-relative form-group"><label for="examplePassword11"
                            class="">Password</label><input name="password" id="examplePassword11"
                            placeholder="password placeholder" type="password" class="form-control"
                            value="{{$nguoidungs->password}}"></div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-2">
                    <div class="position-relative form-group"><label for="exampleCity" class="">Tổng Số bài
                            đăng</label><input name="city" id="exampleCity" type="text" class="form-control"></div>
                </div>

                <div class="col-md-2">
                    <div class="position-relative form-group"><label class="">Số bài đăng vi phạm</label><input name=""
                            id=""  type="" class="form-control"></div>
                </div>
                <div class="col-md-2">
                    <div class="position-relative form-group"><label class="">Vip</label>
                        <select class="form-control" name="Vip">
                            <option <?php if ($nguoidungs->vip == 0 ) echo 'selected' ; ?> value="0">Không có vip</option>
                            <option <?php if ($nguoidungs->vip == 1 ) echo 'selected' ; ?> value="1">Vip 1
                            </option>
                            <option <?php if ($nguoidungs->vip == 2 ) echo 'selected' ; ?> value="2">Vip 2
                            </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row">

                <div class="col-md-2">
                    <div class="position-relative form-group"><label for="exampleState" class="">Số điện
                            thoại</label><input name="state" id="exampleState" type="text" class="form-control"
                            value="{{$nguoidungs->phone}}"></div>
                </div>
                <div class="col-md-2">
                    <div class="position-relative form-group"><label class="">Trạng Thái</label>
                        <select class="form-control" name="TinhTrang">
                            <option <?php if ($nguoidungs->status == 1 ) echo 'selected' ; ?> value="1">Còn hoạt
                                động</option>
                            <option <?php if ($nguoidungs->status == 0 ) echo 'selected' ; ?> value="0">Đã Khóa
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-7">
                    <div class="position-relative form-group"><label for="exampleAddress" class="">Địa chỉ</label>
                        <input name="address" id="exampleAddress" placeholder="1234 Main St" type="text"
                            class="form-control" value="{{$nguoidungs->address}}">
                    </div>
                </div>
            </div>
    



    <div class="position-relative form-check"><input name="check" id="exampleCheck" type="checkbox"
            class="form-check-input"><label for="exampleCheck" class="form-check-label">Xác nhận</label>
    </div>
    <button type="submit" class="mt-2 btn btn-primary">Sửa</button>
   
</div>


</div>
@endsection
