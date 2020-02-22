@extends('admin.layouts.main')
@section('title', 'Bài Đăng Vi Phạm')
@section('content')
<div class="app-page-title">
    <div>
        <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="active breadcrumb-item" aria-current="page">Bài Đăng Vi Phạm</li>
            </ol>
        </nav>
    </div>
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-drawer icon-gradient bg-happy-itmeo"></i></div>
            <div style="color: #1ca9e9;font-size: 23px;">Danh Sách Bài Đăng Vi Phạm
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
<div class="row">
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Tổng hợp bài đăng vi phạm chờ xử lý</h5>
                <table class="mb-0 table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Người Báo Cáo</th>
                            <th>SĐT</th>
                            <th>Email</th>
                            <th>Bài Đăng </th>
                            <th>Tài Khoản</th>
                            <th>Mô Tả Vi Phạm</th>
                            <th>Thời Gian</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $i=0;
                              ?>
                            @foreach($posts as $po)
                        <?php
                                $i+=1;
                              ?>
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$po->name}}</td>
                            @if($po->phone)
                            <td><a href="tel://{{$po->phone}}">
                                    {{$po->phone}}
                                </a>
                            </td>

                            @else
                            <td>No Number</td>
                            @endif
                            @if($po->email)
                            <td><a href="email://{{$nd->phone}}">
                                    {{$po->email}}
                                </a>
                            </td>

                            @else
                            <td>No Email</td>
                            @endif
                            <td>{{$po->Motelroom->title}}</td>
                            <td>{{$po->Motelroom->User->name}}</td>
                            <td>{{$po->title}}</td>
                            <td>{{$po->created_at}}</td>
                            <td>action</td>
                        </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
