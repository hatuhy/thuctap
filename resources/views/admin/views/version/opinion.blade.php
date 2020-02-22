@extends('admin.layouts.main')
@section('title', 'Các Góp Ý Của Người Dùng')
@section('content')
<div class="app-page-title">
    <div>
        <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="active breadcrumb-item" aria-current="page">Góp ý của người dùng</li>
            </ol>
        </nav>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="card-title">Góp ý của người dùng tham gia website
                    <button type="button" aria-expanded="true" aria-controls="exampleAccordion1" data-toggle="collapse"
                        href="#collapseExample1" class="m-0 p-0 btn btn-link">
                        <i class="fa fa-fw" aria-hidden="true" title="Ẩn/Hiện"></i>
                    </button>
                </div>
                <div id="exampleAccordion" data-children=".item">
                    <div class="item">

                        <div data-parent="#exampleAccordion" id="collapseExample1" class="collapse hide">
                            <div class="page-title-subheading" style="color:black;">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="card-title">Góp ý của người dùng không tham gia website
                    <button type="button" aria-expanded="true" aria-controls="exampleAccordion1" data-toggle="collapse"
                        href="#collapseExample" class="m-0 p-0 btn btn-link">
                        <i class="fa fa-fw" aria-hidden="true" title="Ẩn/Hiện"></i>
                    </button>
                </div>
                <div id="exampleAccordion" data-children=".item">
                    <div class="item">

                        <div data-parent="#exampleAccordion" id="collapseExample" class="collapse hide">
                            <div class="page-title-subheading" style="color:black;">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                                <img width="42" class="img-opinion" src="assets/admin/images/avatars/1.jpg"
                                    data-toggle="modal" data-target=".bd-example-modal-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <div class="card-title">Danh sách ý tưởng hay</div>
                <table class="mb-0 table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Người Báo Cáo</th>
                            <th>SĐT</th>
                            <th>Bài Đăng </th>
                            <th>Tài Khoản</th>
                            <th>Mô Tả Vi Phạm</th>
                            <th>Thời Gian</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">1</th>
                            <td>Hà Văn Tú</td>
                            <td>0376521198</td>
                            <td>Cho thuê nhà trọ 25</td>
                            <td>Nguyễn Văn A</td>
                            <td>Phòng trọ đã có người thuê </td>
                            <td>2020-01-01</td>
                            <td>action</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection



