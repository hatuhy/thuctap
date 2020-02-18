@extends('admin.layouts.main')
@section('title', 'Quản lý danh sách các phòng trọ , nhà trọ , homestay , ktx ,...')
@section('content')
<div class="app-page-title">
    <div>
        <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="active breadcrumb-item" aria-current="page">Quản Lý Phòng Trọ</li>
            </ol>
        </nav>
    </div>
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-drawer icon-gradient bg-happy-itmeo"></i></div>
            <div style="color: #1ca9e9;font-size: 23px;">Danh Sách Các Bài Đăng Đã Được Kiểm Duyệt
                <div id="exampleAccordion" data-children=".item">
                    <div class="item">
                        <button type="button" aria-expanded="true" aria-controls="exampleAccordion1"
                            data-toggle="collapse" href="#collapseExample" class="m-0 p-0 btn btn-link">Ẩn/Hiện</button>
                        <div data-parent="#exampleAccordion" id="collapseExample" class="collapse hide">
                            <div class="page-title-subheading" style="color:black;">Đây là những phòng trọ mà người dùng
                                muốn đưa thông tin
                                lên trang web</br>Xác nhận để chúng hiển thị lên trang thuetro247.com ! ! ! ! ! ! ! ! !
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-actions"><button type="button" data-toggle="tooltip" title="Example Tooltip"
                data-placement="bottom" class="btn-shadow mr-3 btn btn-dark"><i class="fa fa-star"></i></button>
            <div class="d-inline-block dropdown"><button type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info"><span
                        class="btn-icon-wrapper pr-2 opacity-7"><i
                            class="fa fa-business-time fa-w-20"></i></span>Buttons </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i
                                    class="nav-link-icon lnr-inbox"></i><span>Inbox </span>
                                <div class="ml-auto badge badge-pill badge-secondary">86</div>
                            </a></li>
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i
                                    class="nav-link-icon lnr-book"></i><span>Book </span>
                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                            </a></li>
                        <li class="nav-item"><a href="javascript:void(0);" class="nav-link"><i
                                    class="nav-link-icon lnr-picture"></i><span>Picture </span></a></li>
                        <li class="nav-item"><a disabled href="javascript:void(0);" class="nav-link disabled"><i
                                    class="nav-link-icon lnr-file-empty"></i><span>File Disabled </span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form action="" method="get">
                @CSRF
                <h5 class="card-title">Table with hover</h5>
                <div class="table-responsive">
                    <table class="mb-0 table table-hover">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tiêu Đề</th>
                                <th>Hình Thức</th>
                                <th>Loại Hình</th>
                                <th>Diện Tích</th>
                                <th>Giá </th>
                                <th>Địa Chỉ</th>
                                <th>Người Đăng</th>
                                <th>Số Lần Chỉnh Sửa</th>
                                <th>Lần Sửa Cuối</th>
                                <th>View</th>
                                <th>Trạng Thái</th>
                                <th>Người Đăng</th>
                                <th>Số Lần Chỉnh Sửa</th>
                                <th>Lần Sửa Cuối</th>
                                <th>View</th>
                                <th>Trạng Thái</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=0;
                              ?>
                            @foreach($dspts as $dspt)
                            <?php
                                $i+=1;
                              ?>
                            <tr>
                                <th scope="row">{{$i}}</th>
                                <td>{{$dspt->title}}</td>
                                <td>{{$dspt->Type->name}}</td>
                                <td>{{$dspt->Form->name}}</td>
                                <td>{{$dspt->area}}m<span>2</span></td>
                                <td>{{number_format($dspt->price)}}</td>
                                <td>{{$dspt->address}}</td>
                                <td>{{$dspt->User->name}}</td>
                                <td>{{$dspt->num_change}}</td>
                                <td>{{$dspt->updated_at}}</td>
                                <td>{{$dspt->view}}</td>
                                <td>{{$dspt->status}}</td>
                                <td>{{$dspt->User->name}}</td>
                                <td>{{$dspt->num_change}}</td>
                                <td>{{$dspt->updated_at}}</td>
                                <td>{{$dspt->view}}</td>
                                <td>{{$dspt->status}}</td>
                                <td>

                                    @if(session('thongbao'))
                                    <div class="alert alert-success">
                                        {{ session('thongbao') }}
                                    </div>
                                    @endif
                                    <button class="btn btn-success categoryButton sua"><a href="">
                                            <i class="fa fa-fw" aria-hidden="true" title="Kiểm duyệt"></i>
                                        </a></button>
                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>

@endsection
