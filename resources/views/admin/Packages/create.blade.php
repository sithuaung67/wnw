@extends('admin.layouts.master')
@section('css')
    <link rel="shortcut icon" href="{{asset('assets/img/wwlogo.png')}}">
    <link rel="stylesheet" href="{{asset('assets/style/WnW.css')}}">
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Add New Package</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Network</a></li>
                        <li class="breadcrumb-item active">Add New Package</li>
                        <li class="breadcrumb-item active">Form</li>
                    </ol>
                </div>
            </div>
        </div><hr>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Form Start -->
                            <div class="form">
                                <span style="color:red;">(Marked with * are Mandatory Fields)<br><br></span>
                                <form action="{{route('post_package_create')}}" method="post" enctype="multipart/form-data">
                                    <div class="border_form">
                                        <div class="row" style="padding: 0px;">
                                            <div class="col-md-12 mb-2">
                                                <span  style="font-size:23px; color:#06c; font-weight:700;">
                                                    Creating Package<br></span >
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Package Name<span style="color:red;">*</span></span ><br>
                                                <input type="text" name="package_name" id="package_name" style="width: 300px;" required><br/>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Region & State<span style="color:red;">*</span></span ><br>
                                                <input type="text" name="region" id="region" style="width: 300px;" required><br/>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Country<span style="color:red;">*</span></span ><br>
                                                <input type="text" name="country" id="country" style="width: 300px;" required><br/>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Trip Date<span style="color:red;">*</span></span ><br>
                                                <input type="text" name="date" id="date" style="width: 300px;" required><br/>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Price<span style="color:red;">*</span></span ><br>
                                                <input type="text" name="price" id="price" style="width: 300px;" required><br/>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Upload Image<span style="color:red;">*</span></span ><br>
                                                <input type="file" name="image" id="image" style="width: 300px;"><br/>
                                                <br>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="send">
                                        <input class="btn btn-primary" type="submit" value="Sign Up">
                                    </div>
                                    @csrf
                                </form>
                            </div>
                            <!-- Form End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
