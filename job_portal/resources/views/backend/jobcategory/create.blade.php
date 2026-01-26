@extends('backend.layout.master')
@section("head")
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Biz Admin - Multipurpose bootstrap 4 admin templates</title>
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content="uxliner"/>
<!-- v4.1.3 -->
<link rel="stylesheet" href="{{asset('dist/bootstrap/css/bootstrap.min.css')}}">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('dist/img/favicon-16x16.png')}}">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/et-line-font/et-line-font.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/simple-lineicon/simple-line-icons.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

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
    <div class="content-header sty-one">
      <h1 class="text-white">Job Entry</h1>
    </div>

    <div class="content">
      <div class="row">
        <div class="col-lg-12">
          <div class="card card-outline">
            <div class="card-header bg-blue">
              <h5 class="text-white m-b-0">Add Job Category</h5>
            </div>

            <div class="card-body">

              @if($errors->any())
                <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                  @endforeach
                </div>
              @endif

              <form action="{{ route('jobcategory.store') }}" method="POST">
                @csrf

                <div class="form-group">
                  <label>Category Name</label>
                  <input 
                    type="text" 
                    name="cat_name" 
                    value="{{ old('cat_name') }}" 
                    class="form-control"
                    placeholder="Enter category name">
                </div>
                <div class="form-group">
                    <label>Description</label>
                </div>
                <textarea  class="form-control" name="description" placeholder="Enter Description" ></textarea>
             <br>

                <button type="submit" class="btn btn-success">
                  Submit
                </button>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
