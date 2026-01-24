@extends('backend.layouts.master')
@section("head")
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="dist/assets/images/favicon.ico">

    <link href="dist/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="dist/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="dist/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="dist/assets/js/config.js"></script>
</head>
@endsection

@section ("content")
 <div class="container-fluid">

                    <!-- start page title -->
                    <div class="py-3 py-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4 class="page-title mb-0">Dashboard</h4>
                            </div>
                            <div class="col-lg-6">
                               <div class="d-none d-lg-block">
                                <ol class="breadcrumb m-0 float-end">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashtrap</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                               </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">Daily</span>
                                        <h5 class="card-title mb-0">Cost per Unit</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                $17.21
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">12.5% <i
                                                    class="mdi mdi-arrow-up text-success"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">Per Week</span>
                                        <h5 class="card-title mb-0">Market Revenue</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                $1875.54
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">18.71% <i
                                                    class="mdi mdi-arrow-down text-danger"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">Per Month</span>
                                        <h5 class="card-title mb-0">Expenses</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                $784.62
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">57% <i
                                                    class="mdi mdi-arrow-up text-success"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">All Time</span>
                                        <h5 class="card-title mb-0">Daily Visits</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                1,15,187
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">17.8% <i
                                                    class="mdi mdi-arrow-down text-danger"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropdown float-end position-relative">
                                        <a href="#" class="dropdown-toggle h4 text-muted" data-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="#" class="dropdown-item">Action</a></li>
                                            <li><a href="#" class="dropdown-item">Another action</a></li>
                                            <li><a href="#" class="dropdown-item">Something else here</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a href="#" class="dropdown-item">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <h4 class="card-title d-inline-block">Total Revenue</h4>

                                    <div id="morris-line-example" class="morris-chart" style="height: 290px;"></div>

                                    <div class="row text-center mt-4">
                                        <div class="col-6">
                                            <h4>$7841.12</h4>
                                            <p class="text-muted mb-0">Total Revenue</p>
                                        </div>
                                        <div class="col-6">
                                            <h4>17</h4>
                                            <p class="text-muted mb-0">Open Compaign</p>
                                        </div>
                                    </div>

                                </div>
                                <!--end card body-->

                            </div>
                            <!--end card-->
                        </div>
                      

                    </div>
                    <!--end row-->

                </div> <!-- container -->

@endsection

@section("scripts")
<!-- App js -->
    <script src="dist/assets/js/vendor.min.js"></script>
    <script src="dist/assets/js/app.js"></script>

    <!-- Knob charts js -->
    <script src="dist/assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline Js-->
    <script src="dist/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="dist/assets/libs/morris.js/morris.min.js"></script>

    <script src="dist/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init-->
    <script src="dist/assets/js/pages/dashboard.js"></script>

@endsection