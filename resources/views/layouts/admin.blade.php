<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="author" content="">
    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <link rel="shortcut icon" href="dist/favicon.ico">

    {{--<title>{!! $title !!} || {!! Config::get('customConfig.names.siteName')!!}</title>--}}
    <title>Examination Paper Status</title>

    <!-- Admin LTE template css file  -->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" type="text/css"  href="{!! asset('https://fonts.googleapis.com/css?family=Heebo:400,500,700|Roboto:300,400') !!}">
    <link rel="stylesheet" type="text/css"  href="{!! asset('css/bootstrap.min.css') !!}">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" type="text/css"  href="{!! asset('css/font-awesome.min.css') !!}">
    <link rel="stylesheet" type="text/css"  href="{!! asset('css/jquery-jvectormap-1.2.2.css') !!}">
    <link rel="stylesheet" type="text/css"  href="{!! asset('css/AdminLTE.min.css') !!}">
    <link rel="stylesheet" type="text/css"  href="{!! asset('css/_all-skins.min.css') !!}">
    <link rel="stylesheet" type="text/css"  href="{!! asset('css/style.css') !!}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    @yield('style')

</head>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

@include('admin.includes.topMenu')
@include('admin.includes.sideBar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div><!-- /.content-wrapper -->

    <!-- Footer Start -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <!-- <b>Version</b> 2.3.0 -->
            <!-- <strong>Thanks to <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> -->
        </div>
        <strong>Copyright &copy;2018 </strong> All rights reserved.
    </footer>
    <!-- Footer Ends -->

</div><!-- ./wrapper -->

@include('admin.includes.dashboardScripts')
@yield('script')
</body>
</html>