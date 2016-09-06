<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <link rel="shortcut icon" href="{{url('assets/images/icons/favicon.html')}}">
    <link rel="apple-touch-icon" href="{{url('assets/images/icons/favicon-2.html')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('assets/images/icons/favicon-72x72.html')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('assets/images/icons/favicon-114x114.html')}}">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{url('assets/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('assets/vendors/bootstrap/css/bootstrap.min.css')}}">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="{{url('assets/vendors/DataTables/media/css/jquery.dataTables.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('assets/vendors/DataTables/media/css/dataTables.bootstrap.css')}}">

    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="{{url('assets/vendors/animate.css/animate.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('assets/vendors/jquery-pace/pace.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('assets/vendors/iCheck/skins/all.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('assets/vendors/jquery-notific8/jquery.notific8.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{url('assets/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css')}}">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="{{url('assets/css/themes/style1/orange-blue.css')}}" class="default-style">
    <link type="text/css" rel="stylesheet" href="{{url('assets/css/themes/style1/orange-blue.css')}}" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="{{url('assets/css/style-responsive.css')}}">
</head>
<body class="">
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#">
            <i class="fa fa-angle-up"></i>
        </a><!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        @include("layout.partials.topbar")
                            <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            @include('layout.partials.sidebar')
            @yield('content')
            <!--BEGIN FOOTER-->
            <div id="footer">
                <div class="copyright">2016 © &mu;Admin - Responsive Admin Panel</div>

            </div>
                <!--END FOOTER-->
                <!--END PAGE WRAPPER-->
        </div>
    </div>
<script src="{{url('assets/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{url('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{url('assets/js/jquery-ui.js')}}"></script>
<!--loading bootstrap js-->
<script src="{{url('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js')}}"></script>
<script src="{{url('assets/js/html5shiv.js')}}"></script>
<script src="{{url('assets/js/respond.min.js')}}"></script>
<script src="{{url('assets/vendors/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{url('assets/vendors/slimScroll/jquery.slimscroll.js')}}"></script>
<script src="{{url('assets/vendors/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="{{url('assets/vendors/iCheck/icheck.min.js')}}"></script>
<script src="{{url('assets/vendors/iCheck/custom.min.js')}}"></script>
<script src="{{url('assets/vendors/jquery-notific8/jquery.notific8.min.js')}}"></script>
<script src="{{url('assets/vendors/jquery-highcharts/highcharts.js')}}"></script>
<script src="{{url('assets/js/jquery.menu.js')}}"></script>
<script src="{{url('assets/vendors/jquery-pace/pace.min.js')}}"></script>
<script src="{{url('assets/vendors/holder/holder.js')}}"></script>
<script src="{{url('assets/vendors/responsive-tabs/responsive-tabs.js')}}"></script>
<script src="{{url('assets/vendors/jquery-news-ticker/jquery.newsTicker.min.js')}}"></script>
<script src="{{url('assets/vendors/moment/moment.js')}}"></script>
<script src="{{url('assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
<script src="{{url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!--CORE JAVASCRIPT-->
<script src="{{url('assets/js/main.js')}}"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="{{url('assets/vendors/DataTables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{url('assets/vendors/DataTables/media/js/dataTables.bootstrap.js')}}"></script>
<script src="{{url('assets/vendors/DataTables/jquery.jeditable.js')}}"></script>
<script src="{{url('assets/js/table-editable.js')}}"></script> 
@yield('js')
</body>

</html>