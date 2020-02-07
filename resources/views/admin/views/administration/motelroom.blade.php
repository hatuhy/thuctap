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
                <h5 class="card-title">Table with hover</h5>
                <div class="table-responsive">
                <table class="mb-0 table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tiêu Đề</th>
                            <th>Hình Thức</th>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Cho thuê phòng trọ giá rẻ</td>
                            <td>Cho thuê</td>
                            <td>20 m<span>2</span></td>
                            <td>500k VNĐ</td>
                            <td>Từ Liêm</td>
                            <td>Hà Văn Tú</td>
                            <td>2</td>
                            <td>2020-01-10 02:20:27</td>
                            <td>20</td>
                            <td>Oke</td>
                            <td>action</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cho thuê phòng trọ giá rẻ</td>
                            <td>Cho thuê</td>
                            <td>20 m<span>2</span></td>
                            <td>500k VNĐ</td>
                            <td>Từ Liêm</td>
                            <td>Hà Văn Tú</td>
                            <td>2</td>
                            <td>2020-01-10 02:20:27</td>
                            <td>20</td>
                            <td>Oke</td>
                            <td>action</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cho thuê phòng trọ giá rẻ</td>
                            <td>Cho thuê</td>
                            <td>20 m<span>2</span></td>
                            <td>500k VNĐ</td>
                            <td>Từ Liêm</td>
                            <td>Hà Văn Tú</td>
                            <td>2</td>
                            <td>2020-01-10 02:20:27</td>
                            <td>20</td>
                            <td>Oke</td>
                            <td>action</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cho thuê phòng trọ giá rẻ</td>
                            <td>Cho thuê</td>
                            <td>20 m<span>2</span></td>
                            <td>500k VNĐ</td>
                            <td>Từ Liêm</td>
                            <td>Hà Văn Tú</td>
                            <td>2</td>
                            <td>2020-01-10 02:20:27</td>
                            <td>20</td>
                            <td>Oke</td>
                            <td>action</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cho thuê phòng trọ giá rẻ</td>
                            <td>Cho thuê</td>
                            <td>20 m<span>2</span></td>
                            <td>500k VNĐ</td>
                            <td>Từ Liêm</td>
                            <td>Hà Văn Tú</td>
                            <td>2</td>
                            <td>2020-01-10 02:20:27</td>
                            <td>20</td>
                            <td>Oke</td>
                            <td>action</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Cho thuê phòng trọ giá rẻ</td>
                            <td>Cho thuê</td>
                            <td>20 m<span>2</span></td>
                            <td>500k VNĐ</td>
                            <td>Từ Liêm</td>
                            <td>Hà Văn Tú</td>
                            <td>2</td>
                            <td>2020-01-10 02:20:27</td>
                            <td>20</td>
                            <td>Oke</td>
                            <td>action</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>action</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>action</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>@twitter</td>
                            <td>action</td>
                        </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

@endsection
