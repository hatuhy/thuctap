<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="assets/admin/images/icon.ico"/>
    <link href="{{ asset('assets/admin') }}/css/main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css"> 
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"> 
</head>

<body>
    <div id="in"></div>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('admin.partials.header')
        @include('admin.partials.setting')
        <div class="app-main">
            @include('admin.partials.menu')
            <div class="app-main__outer">
                <div class="app-main__inner">
                
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
   

    <script src="{{ asset('assets/admin') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets/admin') }}/js/ckeditor.js"></script>
    <script src="{{ asset('assets/admin') }}/js/dropzone.js"></script>
    <script src="{{ asset('assets/admin') }}/js/main.js"></script>
    <script src="{{ asset('assets/admin') }}/js/script.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"></script>


</body>

</html>
