<!DOCTYPE html>
<html lang="en">
<head><title>I Have You Have</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <meta name="_token" content="{!! csrf_token() !!}"/>
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/font-awesome/css/font-awesome.min.css ')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/bootstrap/css/bootstrap.min.css')}}">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/intro.js/introjs.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/calendar/zabuto_calendar.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/sco.message/sco.message.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/intro.js/introjs.css')}}">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/animate.css/animate.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/jquery-pace/pace.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/iCheck/skins/all.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/jquery-notific8/jquery.notific8.min.css')}}">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/themes/style1/orange-blue.css')}}" class="default-style">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/themes/style1/orange-blue.css')}}" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/style-responsive.css')}}">
    
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/bootstrap-datepicker/css/datepicker.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('admin_assets/css/custom.css') }}">
    
    <script src="{{ asset('admin_assets/js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{ asset('admin_assets/js/jquery-ui.js')}}"></script>
    <!--loading bootstrap js-->
    <script src="{{ asset('admin_assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js')}}"></script>
    <script src="{{ asset('admin_assets/js/html5shiv.js')}}"></script>
    <script src="{{ asset('admin_assets/js/respond.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/slimScroll/jquery.slimscroll.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-cookie/jquery.cookie.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/iCheck/icheck.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/iCheck/custom.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-notific8/jquery.notific8.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-highcharts/highcharts.js')}}"></script>
    <script src="{{ asset('admin_assets/js/jquery.menu.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-pace/pace.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/holder/holder.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/responsive-tabs/responsive-tabs.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-news-ticker/jquery.newsTicker.min.js')}}"></script>
    <script src="{{ asset('admin_assets/vendors/jquery-validate/jquery.validate.min.js')}}"></script>
        
   
        
        
        
    <script>
    var BASE_URL = "{{ URL::to('/') }}";
    var ADMIN_URL = "{{ URL::to('/').'/admin' }}";
    var CSRF_TOKEN = "{{ csrf_token() }}";
    //var base_url_suffix	= '';
    //var base_url = location.protocol + '//' + location.host + '/' + base_url_suffix;
</script>
</head>
<body class=" ">
<div>
  <!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP--><!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="{{ URL::route('admin_login') }}" class="navbar-brand" style="padding:0">
                <span class="fa fa-rocket"></span>
                    <span class="logo-text"><img src="/admin_assets/images/logo.png"/></span>
                    <span style="display: none" class="logo-text-icon"><img src="/admin_assets/images/small_logo.png"/></span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav    ">
                    <li class="active"><a href="{{ URL::route('admin_dashboard') }}">Dashboard</a></li>

                </ul>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="/admin_assets/images/profile-pic.png" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs">{!!Session::get('ADMIN_ACCESS_NAME')!!}</span>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="{{ URL::route('admin_profile') }}"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="{{ URL::route('admin_change_password') }}"><i class="fa fa-user"></i>Change Password</a></li>
                            <li><a href="{{ URL::route('admin_logout') }}"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--BEGIN MODAL CONFIG PORTLET-->
        <!--END MODAL CONFIG PORTLET--></div>
    <!--END TOPBAR-->
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="user-panel">
                        <div class="thumb"><img src="/admin_assets/images/profile-pic.png" alt="" class="img-circle"/></div>
                        <div class="info"><p>{!!Session::get('ADMIN_ACCESS_NAME')!!}</p>
                            <ul class="list-inline list-unstyled">
                                <li><a href="{{ URL::route('admin_profile') }}" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a></li>
                                <li><a href="{{ URL::route('admin_logout') }}" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li @if(Route::current()->getName() == 'admin_dashboard') {{ "class=active" }} @endif>
                        <a href="{{ URL::route('admin_dashboard') }}"><i class="fa fa-tachometer fa-fw">
                            <div class="icon-bg bg-orange"></div>
                        </i><span class="menu-title">Dashboard</span></a>
                        
                    </li>
                    <li @if(Route::current()->getName() == 'admin_card' or Route::current()->getName() == 'admin_card_create' or Route::current()->getName() == 'admin_card_edit')  {{ "class=active" }} @endif>
                        <a href="{{ URL::route('admin_card') }}"><i class="fa fa-tachometer fa-fw">
                            <div class="icon-bg bg-orange"></div>
                        </i><span class="menu-title">Card Management</span></a>
                        
                    </li>
                    <li @if(Route::current()->getName() == 'admin_howtoplay') {{ "class=active" }} @endif>
                        <a href="{{ URL::route('admin_howtoplay') }}"><i class="fa fa-tachometer fa-fw">
                            <div class="icon-bg bg-orange"></div>
                        </i><span class="menu-title">How to play</span></a>
                        
                    </li>

                   
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU-->
        @if(Session::has('success')) 
                <div id="flashmessage" class="page_mess_animate page_mess_ok"><?= Session::get('success');?></div>
            @endif
            @if(Session::has('error'))
                <div id="flashmessage" class="page_mess_animate page_mess_error"><?= Session::get('error');?></div>
            @endif 
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper"><!--BEGIN CONTENT-->

                @yield('content')

            <!--END CONTENT-->
        </div>
        <!--BEGIN FOOTER-->
        <div id="footer">
            <div class="copyright">&copy <?php echo date("Y"); ?>-<?php echo date('Y', strtotime('+1 year')); ?> - Rewater Fate Card Game </div>
        </div>
        <!--END FOOTER--><!--END PAGE WRAPPER--></div>
</div>

<!--CORE JAVASCRIPT-->
<script src="{{ asset('admin_assets/js/main.js')}}"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="{{ asset('admin_assets/vendors/intro.js/intro.js')}}"></script>

<script src="{{ asset('admin_assets/vendors/calendar/zabuto_calendar.min.js')}}"></script>
<script src="{{ asset('admin_assets/vendors/sco.message/sco.message.js')}}"></script>
<script src="{{ asset('admin_assets/vendors/intro.js/intro.js')}}"></script>
<script src="{{ asset('admin_assets/vendors/ckeditor/ckeditor.js') }}"></script>

<!--LOADING SCRIPTS FOR PAGE-->
<script src="{{ asset('admin_assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/moment/moment.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/bootstrap-clockface/js/clockface.js') }}"></script>
<script src="{{ asset('admin_assets/vendors/jquery-maskedinput/jquery-maskedinput.js') }}"></script>
<script src="{{ asset('admin_assets/js/form-components.js') }}"></script>
<script src="{{ asset('admin_assets/js/form-validation.js') }}"></script>
<script src="{{ asset('admin_assets/js/custom_script.js')}}"></script>
<script src="{{ asset('admin_assets/js/table-advanced.js')}}"></script>
</body>
</html>