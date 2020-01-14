@extends('admin.layouts.main')
@section('title', 'Thông Tin Cá Nhân')
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
            <p><i class="fas fa-map-marker-alt" style="font-size:20px; color:blue;     margin-right: 20px;"></i>Hoàn Long- Yên Mỹ -
                Hưng Yên</p>

        </div>
        <div class="change-profile btn-search">
            <a href="#" class="btn">Change profile</a>
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
<div class="change-infor  d-none" id="change-infor" style="width: 55%;">
    <div class="main-card mb-3 card" style="float: right;width: 95%;">
        <div class="card-body">
            <h5 class="card-title">Thay Đổi Thông Tin</h5>
            <form class="">
                <div class="position-relative form-group"><label for="Name" class="">Họ Và Tên</label>
                    <input name="name" id="Name" placeholder="Nhập họ tên" type="name" class="form-control"></div>
                <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label>
                    <input name="email" id="exampleEmail" placeholder="Nhập email" type="email" class="form-control">
                </div>
                <div class="position-relative form-group"><label for="examplePassword" class="">Mật Khẩu</label>
                    <input name="password" id="examplePassword" placeholder="Nhập password" type="password"
                        class="form-control"></div>
                <div class="position-relative form-group"><label for="phone" class="">Số Điện Thoại</label>
                    <input name="phone" id="Phone" placeholder="Nhập số điện thoại" type="phone" class="form-control">
                </div>
                <div class="position-relative form-group"><label for="address" class="">Địa Chỉ</label>
                    <input name="address" id="Addresss" placeholder="Nhập địa chỉ" type="address" class="form-control">
                </div>

                <div class="position-relative form-group"><label for="exampleFile" class="">Avatar</label><input
                        name="file" id="exampleFile" type="file" class="form-control-file">
                    <small class="form-text text-muted">Avatar sẽ làm icon trên hệ thống của chúng tôi</small>
                </div>
                <button class="mt-1 btn btn-primary">Xác Nhận</button>
            </form>
        </div>
    </div>
</div>
@endsection

