@extends('admin.layouts.main')
@section('title','Trang quản trị hệ thống thuetro247.com')
@section('content')
<div class="app-page-title">
    <div>
        <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="active breadcrumb-item" aria-current="page">Kiểm Duyệt Phòng Trọ</li>
            </ol>
        </nav>
    </div>
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon"><i class="pe-7s-drawer icon-gradient bg-happy-itmeo"></i></div>
            <div style="color: #1ca9e9;font-size: 23px;">Danh Sách Phòng Trọ Chưa Kiểm Duyệt
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

    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Table with hover</h5>
                <table id="myTable" class="mb-0 table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th style="text-align: center ; width:30%;">Tiêu Đề</th>
                            <th>Hình Thức</th>
                            <th>Loại Hình</th>
                            <th>Diện Tích</th>
                            <th>Giá </th>
                            <th>Người Đăng</th>
                            <th>Ngày Đăng</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                $i=0;
                              ?>
                        @foreach($dsptckds as $ptckd)
                        <?php
                                $i+=1;
                              ?>
                        <tr>
                            <th scope="row">{{$i}}</th>
                            <td>{{$ptckd->title}}</td>
                            <td>{{$ptckd->Type->name}}</td>
                            <td>{{$ptckd->Form->name}}</td>
                            <td>{{$ptckd->area}}m<span>2</span></td>
                            <td>{{number_format($ptckd->price)}}VND/Th</td>
                            <td>{{$ptckd->User->name}}</td>
                            <td>{{date($ptckd->created_at)}}</td>
                            <td>
                                @if(session('thongbao'))
                                <div class="alert alert-success">
                                    {{ session('thongbao') }}
                                </div>
                                @endif
                                <form action="bai-dang/chua-kiem-duyet/kiem-duyet/{{$ptckd->id}}" method="get">
                                    @CSRF
                                    <button class="btn btn-success categoryButton sua">
                                        <a href="">
                                            <i class="fa fa-fw" aria-hidden="true" title="Kiểm duyệt"></i>
                                        </a>
                                    </button>
                            </td>
                            <td>
                                <button class="btn btn-success categoryButton sua">
                                    <a href="" style="color:red">
                                        <i class="fa fa-fw" aria-hidden="true" title="Ẩn Bài Đăng"></i>
                                    </a>
                                </button>   
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
