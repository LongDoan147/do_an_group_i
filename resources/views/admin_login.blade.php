<!DOCTYPE html>

<head>
    <title>Trang quản lý Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('css/font.css')}}" type="text/css" />
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="{{asset('js/jquery2.0.3.min.js')}}"></script>
</head>

<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Đăng Nhập</h2>
            <?php

            use Illuminate\Support\Facades\Session;

            $messgae =  Session::get('message');
            if ($messgae) {
                echo '<span style="margin-left: 34%;text-align: center;color: red;">' . $messgae . '</span>';
                Session::put('message', null);
            }
            ?>
            <form action=" {{ route('admin.layout') }}" method="post">
                {{csrf_field()}}
                <input type="text" class="ggg" name="admin_email" placeholder="Email" required="">
                <input type="password" class="ggg" name="admin_password" placeholder="Password" required="">
                <span><input type="checkbox" />Nhớ đăng nhập</span>
                <h6><a href="#">Quên mật khẩu</a></h6>
                <div class="clearfix"></div>
                <input type="submit" value="Đăng Nhập" name="login">
            </form>
            <div class="flex items-center justify-end mt-4">
                <a class="btn" href="{{ url('auth/github') }}"
                    style="background: #313131; color: #ffffff; padding: 10px; width: 100%; text-align: center; display: block; border-radius:3px;">
                    Login with GitHub
                </a>
            </div>
            <!-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p> -->
        </div>
    </div>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{asset('js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{asset('js/jquery.scrollTo.js')}}"></script>
</body>

</html>
