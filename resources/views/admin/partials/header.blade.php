<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src">

        </div>
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
    <div class="app-header__content">
        <div class="app-header-left">
            <div class="search-wrapper">
                <div class="input-holder">
                    <input type="text" class="search-input" placeholder="Type to search">
                    <button class="search-icon"><span></span></button>
                </div>
                <button class="close"></button>
            </div>

        </div>
        <div class="app-header-right">
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle" src="assets/admin/images/avatars/1.jpg"
                                        alt="">
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                    class="dropdown-menu dropdown-menu-right">
                                    <button type="button" tabindex="0" class="dropdown-item">
                                        <a href="profile">Thông tin cá nhân</a>
                                    </button>
                                    <button type="button" tabindex="0" class="dropdown-item">Tin nhắn</button></button>


                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <button type="button" tabindex="0" class="dropdown-item">
                                        <a href="{{route('dangxuat')}}">Đăng Xuất</a>
                                   </button>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                Hà Văn Tú
                            </div>
                            <div class="widget-subheading">
                                Manager
                            </div>
                        </div>

                        <div class="page-title-actions" style="margin-left:10px;">
                            <div class="d-inline-block dropdown"><button type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"
                                    class="btn-shadow dropdown-toggle btn btn-info"><i class="fa fa-fw" aria-hidden="true"
                                            title="Thông báo"></i></button>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                    class="dropdown-menu dropdown-menu-right">
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
                                        <li class="nav-item"><a disabled href="javascript:void(0);"
                                                class="nav-link disabled"><i
                                                    class="nav-link-icon lnr-file-empty"></i><span>File Disabled
                                                </span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
