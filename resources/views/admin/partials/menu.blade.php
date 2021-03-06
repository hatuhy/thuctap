<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <a href="admin">
            <div class="logo-src"></div>
        </a>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading" style="margin-right: 2px;font-size: 18px;">
                    <i class="fa fa-fw" style="color:#f5576c;"></i>
                    Thống Kê </li>
                <li>
                    <a href="{{route('thongke')}}" class="mm-active">
                        <i class=" metismenu-icon fa fa-fw" aria-hidden="true" title="Thống kê"></i>
                        Hoạt động của hệ thống
                    </a>
                </li>
                <li class="app-sidebar__heading" style="margin-right: 2px;font-size: 18px;">
                    <i class="fa fa-fw" style="color:#f5576c;"></i>
                    Quản Trị Hệ Thống</li>
                <li>
                    <a href="{{route('approve')}}">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Kiểm duyệt phòng trọ"></i>
                        Kiểm Duyệt Phòng Trọ

                    </a>
                </li>
                <li>
                    <a href="{{route('danhsachnd')}}">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Quản lý tài khoản"></i>
                        Quản Lý Tài Khoản

                    </a>
                </li>
                <li>
                    <a href="{{route('dspost')}}">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Quản lý bài đăng"></i>
                        Quản Lý Các Bài Đăng
                    </a>
                </li>

                <li class="app-sidebar__heading" style="margin-right: 2px;font-size: 18px;">
                    <i class="fa fa-hammer icon-gradient bg-arielle-smile"> </i>
                    Xử Lý Vi Phạm
                </li>
                <li>
                    <a href="{{route('rep-post')}}">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Các bài đăng vi phạm"></i>
                        </i>Bài Đăng
                    </a>
                </li>
                <li>
                    <a href="{{route('rep-account')}}">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Các tài khoản vi phạm  "></i>
                        </i>Tài Khoản
                    </a>
                </li>


                <li class="app-sidebar__heading" style="margin-right: 2px;font-size: 18px;">
                    <i class="fa fa-database icon-gradient bg-ripe-malin"> </i>
                    Quản Lý Version</li>
                <li>
                    <a href="{{route('opinion')}}">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="góp ý của người dùng"></i>

                        Góp Ý Của Người Dùng
                    </a>
                </li>
                <li>
                    <a href="{{route('update')}}">
                        <i class="metismenu-icon pe-7s-graph2">
                        </i>
                        Các Bản Nâng Cấp Hệ Thống
                    </a>
                </li>


            </ul>
        </div>
    </div>
</div>
