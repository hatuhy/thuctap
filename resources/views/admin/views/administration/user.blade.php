@extends('admin.layouts.main')
@section('title','Trang quản trị hệ thống thuetro247.com')
@section('content')
<div class="app-page-title">
    <div>
        <nav class="" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                <li class="active breadcrumb-item" aria-current="page">Quản lý tài khoản</li>
            </ol>
        </nav>
    </div>
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
            <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Quản lý tài khoản"></i>
            </div>
            <div style="color: #1ca9e9;font-size: 23px;">Danh Sách Những Tài Khoản Tham Gia Hệ Thống
               
                <div id="exampleAccordion" data-children=".item">
                    <div class="item">
                        <button type="button" aria-expanded="true" aria-controls="exampleAccordion1"
                            data-toggle="collapse" href="#collapseExample" class="m-0 p-0 btn btn-link">Ẩn/Hiện</button>
                        <div data-parent="#exampleAccordion" id="collapseExample" class="collapse hide">
                            <div class="page-title-subheading" style="color:black;">Đây là những tài khoản tham gia hệ thống trang web
                                thuetro247.com</br>
                                @@ ^^ =_=
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title-actions">
            <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom"
                class="btn-shadow mr-3 btn btn-dark">
                <i class="fa fa-star"></i>
            </button>
            <div class="d-inline-block dropdown">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow dropdown-toggle btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-business-time fa-w-20"></i>
                    </span>
                    Buttons
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-inbox"></i>
                                <span>
                                    Inbox
                                </span>
                                <div class="ml-auto badge badge-pill badge-secondary">86</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-book"></i>
                                <span>
                                    Book
                                </span>
                                <div class="ml-auto badge badge-pill badge-danger">5</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                <i class="nav-link-icon lnr-picture"></i>
                                <span>
                                    Picture
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a disabled href="javascript:void(0);" class="nav-link disabled">
                                <i class="nav-link-icon lnr-file-empty"></i>
                                <span>
                                    File Disabled
                                </span>
                            </a>
                        </li>
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
                <table id="myTable" class="table table-striped mytable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Họ và Tên</th>
                            <th>Email</th>
                            <th>SĐT</th>
                            <th>Vip</th>
                            <th>Quyền</th>
                            <th>Trạng Thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                                $i=0;
                              ?>                          
                              @foreach($nguoidungs as $nd)
                              <?php
                                $i+=1;
                              ?>
                              
                              <tr>
                            <td>{{$i}}</td>
                              <td>{{$nd->name}}</td>
                              <td>{{$nd->email}}</td>
                              @if($nd->phone)
                              <td><a href="tel://{{$nd->phone}}">
                              {{$nd->phone}}
                              </a>
                              </td>
                             
                              @else
                              <td>No Number</td>
                              @endif
                            @if($nd->vip > 0)
                              <td style="color:orange">  {{$nd->vip}}</td>
                            @else
                            <td>{{$nd->vip}}</td>
                            @endif
                              @if($nd->role==1)
                              <td style ="color:red">
                              Admin
                               </td>
                               @endif
                               @if($nd->role==0)
                              <td style ="color:black">
                              User
                               </td>
                               @endif
                             @if($nd->status==1)
                              <td style="color:green">
                                Đang hoạt động
                              </td> 
                              @else
                                @if($nd->status==0)
                                <td style="color:Red">
                                Đã Khóa
                              </td> 
                                @endif
                              @endif  
                              <td>
                                <button class="btn btn-success categoryButton sua"><a href="">
                                <i class="far fa-edit"></i>
                              </a></button>
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
