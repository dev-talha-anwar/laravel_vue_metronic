<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Login Page</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for " name="description" />
        <meta content="" name="Talha" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('adminassets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('adminassets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset("adminassets/global/css/components.min.css") }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('adminassets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset('adminassets/pages/css/login.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('adminassets')}}/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('adminassets')}}/global/plugins/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('adminassets')}}/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ asset('adminassets/favicon.ico') }}" />
    </head>
    <!-- END HEAD -->

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            {{-- <h2 style="color: orange;"><b>Admin Panel</b></h2> --}}
            
            <a href="{{route('admin')}}">
                <img src="{{ asset('adminassets/pages/img/logo-big.png') }}" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <div class="" id="errorsdiv" style="display: none;"></div> 
            <form id="loginform" class="login-form" method="POST" action="{{ route('admin.login.submit') }}">
                <h3 class="form-title font-purple">Sign In</h3>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Enter Email" name="email" /> 
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> 
                </div>
                <div class="form-group">
                    <div class="md-checkbox  font-purple">
                        <input type="checkbox" id="checkbox16" class="md-check" name="remember">
                        <label for="checkbox16">
                            <span class="inc"></span>
                            <span class="check"></span>
                            <span class="box"></span> Remember Me 
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <button id="submitbtn" class="btn purple btn-block uppercase mt-ladda-btn ladda-button" data-style="zoom-in">
                        <span class="ladda-label">
                            <i class="icon-login"></i> Login</span>
                        <span class="ladda-spinner"></span>
                    </button>

                </div>
            </form>
            <!-- END LOGIN FORM -->
        </div>
        <div class="copyright"> 2014 © Metronic. Admin Dashboard Template. </div>
        <!--[if lt IE 9]>
        <script src="../assets/global/plugins/respond.min.js"></script>
        <script src="../assets/global/plugins/excanvas.min.js"></script> 
        <script src="../assets/global/plugins/ie8.fix.min.js"></script> 
        <![endif]-->
        
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('adminassets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('adminassets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('adminassets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('adminassets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset("adminassets/pages/scripts/login.min.js") }}" type="text/javascript"></script>
        <script src="{{asset('adminassets')}}/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
        <script src="{{asset('adminassets')}}/global/plugins/ladda/spin.min.js" type="text/javascript"></script>
        <script src="{{asset('adminassets')}}/global/plugins/ladda/ladda.min.js" type="text/javascript"></script>
        <script src="{{asset('adminassets')}}/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="{{asset('adminassets')}}/pages/scripts/components-bootstrap-switch.min.js" type="text/javascript"></script>
        <script src="{{ asset("adminassets/js/main.js") }}" type="text/javascript"></script>
        <script>
            $(function(){
                $('form input').keydown(function (e) {
                    if (e.keyCode == 13) {
                        e.preventDefault();
                        $("#submitbtn").click();
                    }
                });
                $('#submitbtn').on('click',function(e){
                    e.preventDefault();
                    ajax("{{ route('admin.login.submit') }}",'POST',$('#loginform').serialize(),this);
                });
            });
        </script>
    </body>
</html>