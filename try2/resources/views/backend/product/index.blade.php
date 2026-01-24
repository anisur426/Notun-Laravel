@extends('backend.layouts.master')
@section('head')

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Dashtrap - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('dist/assets/images/favicon.ico')}}">

    <link href="{{asset('dist/assets/libs/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{asset('dist/assets/css/style.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('dist/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('dist/assets/js/config.js')}}"></script>
</head>
@endsection
@section('content')
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

                <div class="table-responsive">
                    <div>
                             <h4 class="text-black">Product list <span class="pull-right"><a class="btn btn-primary" href="{{url('product/create')}}">Add Category</a></span></h4>
                        
                    </div>
                  
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Category</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $item)
                            <tr>
                                <form method="post" action="{{route('product.destroy',$item->id)}}">
                                    @csrf
                                    @method('delete')
                                    <th scope="row">{{$item->id}}</th>
                                  
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->category->name}}</td>
                                    <td>{{$item->stock}}</td>

                                    <td>
                                        <a href="{{route('product.edit',$item->id)}}" class="btn btn-primary">Edit</a>

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </td>
                                </form>

                            </tr>
                            @endforeach



                        </tbody>
                    </table>
                 
                </div>


                </div>
@endsection

@section('scripts')  
<!-- App js -->
    <script src="{{asset('dist/assets/js/vendor.min.js')}}"></script>
    <script src="{{asset('dist/assets/js/app.js')}}"></script>

    <!-- Knob charts js -->
    <script src="{{asset('dist/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

    <!-- Sparkline Js-->
    <script src="{{asset('dist/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <script src="{{asset('dist/assets/libs/morris.js/morris.min.js')}}"></script>

    <script src="{{asset('dist/assets/libs/raphael/raphael.min.js')}}"></script>

    <!-- Dashboard init-->
    <script src="{{asset('dist/assets/js/pages/dashboard.js')}}"></script>
    @endsection

