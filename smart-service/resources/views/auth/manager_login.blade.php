<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biz Admin - Multipurpose bootstrap 4 admin templates</title>
    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="uxliner" />
    <!-- v4.1.3 -->
    <link rel="stylesheet" href="{{asset('dist/bootstrap/css/bootstrap.min.css')}}">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('dist/img/favicon-16x16.png')}}">


    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/et-line-font/et-line-font.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/simple-lineicon/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="login-page">
    <div class="login-box">
        <div class="login-box-body">
            <h3 class="login-box-msg">Manager Sign In</h3>
        <form action="{{ route('manager.login') }}" method="post">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control sty1" placeholder="User">
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control sty1" placeholder="Password">
                </div>
                <div>
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox">
                                Remember Me </label>
                            <a href="pages-recover-password.html" class="pull-right"><i class="fa fa-lock"></i> Forgot pwd?</a>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4 m-t-1">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
                    Facebook</a> <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
                    Google+</a>
            </div>
            <!-- /.social-auth-links -->

            <div class="m-t-2">Don't have an account? <a href="pages-register.html" class="text-center">Sign Up</a></div>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{asset('dist/js/jquery.min.js')}}"></script>
    <script src="{{asset('dist/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- template -->
    <script src="{{asset('dist/js/bizadmin.js')}}"></script>

    <!-- for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- jQuery 3 -->
<script src="{{asset('dist/js/jquery.min.js')}}"></script>
<script src="{{asset('dist/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- template -->
<script src="{{asset('dist/js/bizadmin.js')}}"></script>

<!-- Jquery Sparklines -->
<script src="{{asset('dist/plugins/jquery-sparklines/jquery.sparkline.min.js')}}"></script>
<script src="{{asset('dist/plugins/jquery-sparklines/sparkline-int.js')}}"></script>

<!-- Morris JavaScript -->
<script src="{{asset('dist/plugins/raphael/raphael-min.js')}}"></script>
<script src="{{asset('dist/plugins/morris/morris.js')}}"></script>
<script src="{{asset('dist/plugins/functions/dashboard1.js')}}"></script>

<!-- for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

</body>

</html>