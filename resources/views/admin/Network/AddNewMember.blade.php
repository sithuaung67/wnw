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
                    <h1>Add New Member</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Network</a></li>
                        <li class="breadcrumb-item active">Add New Member</li>
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
                                <form action="{{route('post.member')}}" method="post" enctype="multipart/form-data">
                                    <div class="border_form">
                                        <div class="row" style="padding: 0px;">
                                            <div class="col-md-12">
                                                <span  style="font-size:23px; color:#06c; font-weight:700;">
                                                    Personal Information<br><br></span >
                                                <span  style="color:#06c; font-weight:700;">
                                                    Member Name</span ><br>
                                                <select name="pid" id="pid" style="width: 250px;" required>
                                                    <option value="">Member Id</option>
                                                    @foreach($member_id as $id)
                                                        <option value="{{$id->pid}}">{{$id->member_name}}</option>
                                                    @endforeach
                                                </select><br>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Ownership</span ><br>
                                                <input type="radio" name="ownership" value="individual"> Individual &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="ownership" value="company"> Company<br>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Gender</span ><br>
                                                <input type="radio" name="gender" value="Male"> Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="gender" value="Female"> Female<br>
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Full Name<span style="color:red;">*</span></span ><br>
                                                <input required type="text" name="fname" placeholder="First Name"> &nbsp;&nbsp;&nbsp;
                                                <input required type="text" name="mname" placeholder="Middle Name"> &nbsp;&nbsp;&nbsp;
                                                <input required type="text" name="lname" placeholder="Last Name">
                                                <br><br>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Birth Date<span style="color:red;">*</span></span ><br>
                                                <input type="date" required name="dob"> &nbsp;&nbsp;&nbsp;
                                                <br><br>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="border_form">
                                        <div class="row" style="padding: 0px;">
                                            <div class="col-md-12">
                                                <span  style="font-size:23px; color:#06c; font-weight:700;">
                                                    Account Information<br></span >
                                                <p>Please Note, email addresses typically look something like this: youmama@wwebsitename.com. Email addresses do not begin with “www.”     </p>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Email Address<span style="color:red;">*</span></span ><br>
                                                <input type="email" name="email" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <br><br>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Re-enter Email<span style="color:red;">*</span></span ><br>
                                                <input type="email" name="re_email" required> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <br><br>
                                            </div>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Password<span style="color:red;">*</span></span ><br>
                                                <input type="password" name="pw" required> &nbsp;&nbsp;&nbsp;
                                                <br><br>
                                            </div>
                                            <br>
                                            <div class="col-md-12">
                                                <span  style="color:#06c; font-weight:700;">
                                                    Confirm Password<span style="color:red;">*</span></span ><br>
                                                <input type="password" name="re_pw" required> &nbsp;&nbsp;&nbsp;
                                                <br><br>
                                            </div>
                                            <br>
                                            <div style="width:100%;">
                                                <p style="color:grey;">(Please specify at least one phone number)</p><br>
                                                <div class="col-md-12">
                                                    <span  style="color:#06c; font-weight:700;">
                                                        Phone<span style="color:red;">*</span></span ><br>
                                                    <input type="tel" name="phone" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3 ml-3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="checkbox" name="agree" id="agree" value="agree">
                                                I acknowledge I have read the Membership Terms and Conditions provided by Wings and Wheels.
                                            </div>
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
