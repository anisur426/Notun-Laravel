@extends('backend.layout.master')
@section('head')

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Biz Admin - Multipurpose bootstrap 4 admin templates</title>
        <!-- Tell the browser to be responsive to screen width -->

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description"
            content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
        <meta name="keywords"
            content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
        <meta name="author" content="uxliner" />
        <!-- v4.1.3 -->
        <link rel="stylesheet" href="{{ asset('dist/bootstrap/css/bootstrap.min.css') }}">

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dist/img/favicon-16x16.png') }}">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/et-line-font/et-line-font.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/themify-icons/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/simple-lineicon/simple-line-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('dist/css/skins/_all-skins.min.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->

    </head>
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
            <h1>Add Company</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><i class="fa fa-angle-right"></i> <a href="#">Tables</a></li>
                <li><i class="fa fa-angle-right"></i>Add Company</li>
            </ol>
        </div>


        {{-- main contant --}}

        <div class="content">
            <div class="row m-t-3">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-blue">
                            <h5 class="m-b-0">Horizontal Form</h5>
                        </div>
                        <div class="card-body">
                            <form action="#" class="form-horizontal form-bordered">
                                <div class="form-body">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">First Name</label>
                                        <div class="col-md-9">
                                            <input placeholder="First Name" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Last Name</label>
                                        <div class="col-md-9">
                                            <input placeholder="Last Name" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Gender</label>
                                        <div class="col-md-9">
                                            <select class="form-control custom-select">
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Date of Birth</label>
                                        <div class="col-md-9">
                                            <input class="form-control" placeholder="dd/mm/yyyy" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Street</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">City</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">State</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Post Code</label>
                                        <div class="col-md-9">
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group row last">
                                        <label class="control-label text-right col-md-3">Country</label>
                                        <div class="col-md-9">
                                            <select class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="offset-sm-3 col-md-9">
                                                    <button type="submit" class="btn btn-success"> Submit</button>
                                                    <button type="button" class="btn btn-inverse">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- /main contant --}}
    @endsection
    @section('script')
        <script src="{{ asset('dist/js/jquery.min.js') }}"></script>
        <script src="{{ asset('dist/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- template -->
        <script src="{{ asset('dist/js/bizadmin.js') }}"></script>

        <!-- Jquery Sparklines -->
        <script src="{{ asset('dist/plugins/jquery-sparklines/jquery.sparkline.min.js') }}"></script>
        <script src="{{ asset('dist/plugins/jquery-sparklines/sparkline-int.js') }}"></script>

        <!-- Morris JavaScript -->
        <script src="{{ asset('dist/plugins/raphael/raphael-min.js') }}"></script>
        <script src="{{ asset('dist/plugins/morris/morris.js') }}"></script>
        <script src="{{ asset('dist/plugins/functions/dashboard1.js') }}"></script>

        <!-- for demo purposes -->
        <script src="{{ asset('dist/js/demo.js') }}"></script>
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
    @endsection
