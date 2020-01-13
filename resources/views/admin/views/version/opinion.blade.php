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

<!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>1</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Small modal -->

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                    laoreet rutrum faucibus dolor auctor.</p>
                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
