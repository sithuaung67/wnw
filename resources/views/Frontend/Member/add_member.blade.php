<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('assets/img/wwlogo.png')}}">
    <link rel="stylesheet" href="{{asset('assets/style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('assets/style/WnW.css')}}">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <title>New Member Enrollment</title>
</head>
<body>

<!--Navigation Start-->
<div class="container-fluid navwrapper bg-light">
    <nav class="container navbar bg-light navbar-toggleable-sm navbar-inverse">
        <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#myNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="assets/img/wwlogo.png" alt="" class="img-fluid imglogo">

        <div class="collapse navbar-collapse" id="myNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a href="{{url('frontend_home')}}" class="nav-link text-primary">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-primary">Tour Package</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('frontend_member_index')}}" class="nav-link text-primary">Membership</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('frontend_contact_index')}}" class="nav-link text-primary">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('frontend_about_index')}}" class="nav-link text-primary">About Us</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <div class="header_curency_selector btn-group">
                    <a class="dropdown-toggle btn btn-default header_btn_style" data-toggle="dropdown" aria-expanded="false">English<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a class="js_change_lang" data-lang="en_US">English</a></li>
                        <li><a class="js_change_lang" data-lang="my_MM">Myanmar</a></li>
                    </ul>
                </div>
                <a href="{{route('login')}}"><button class="btn btn-default">
                        <i class="fas fa-sign-in-alt"></i> Login</button></a>
            </ul>
        </div>
    </nav>
</div>
<!--Navigation End-->

<!-- pagination start -->
<div class="container-fluid contact_page">
    <div class="row" style="padding:100px 0 100px 0;">
        <div class="bgbox">
            <h3 style="text-align:center; padding:50px 0 50px 0;color: #ddd;">New Member <span style="color: white;"><b>Enrollment</b></span></h3>
        </div>
    </div>
</div>
<!-- pagination end -->

<!-- Form Start -->
<div class="form">
    <span style="color:red;">(Marked with * are Mandatory Fields)<br><br></span>
    <form action="{{route('add.member')}}" method="post" enctype="multipart/form-data">
        <div class="border_form">
            <div class="row" style="padding: 0px;">
                <div class="col-md-12">
                                                <span  style="font-size:23px; color:#06c; font-weight:700;">
                                                    Personal Information<br><br></span >
                    <span  style="color:#06c; font-weight:700;">
                                                    Member Name</span ><br>
                    <select name="pid" id="pid" style="width: 250px;">
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


<!-- Footer Start -->
<div class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 header-text">
                <a class="branding logo-default" href="#">
                    <img src="assets/img/logo_white.png" alt="Wings & Wheels" class="img-fluid">
                </a>
                <p style="text-align:center; font-size:15px;">Making People Travel More</p>
                <h3 style="text-align:center; padding-top:50px;">
                    <p>Connect <b>With Us</b></p>
                    <a href="https://www.facebook.com/wingsnwheelstours/" style="margin-right: 8px;">
                        <font color="white">
                            <i class="fab fa-facebook-square"></i>
                        </font>
                    </a>
                    <a href="https://twitter.com/wheels_tours" style="margin-right: 8px;" target="_blank;">
                        <font color="white">
                            <i class="fab fa-twitter-square"></i>
                        </font>
                    </a>
                    <a href="https://www.youtube.com/channel/UC-80UCUh2R4QPpsK2ys5bnQ?view_as=subscriber" target="_blank;" style="margin-right: 8px;">
                        <font color="white">
                            <i class="fab fa-youtube-square"></i>
                        </font>
                    </a>
                </h3>

            </div>
            <div class="col-md-4">
                <h4>Company</h4>
                <br>
                <ul class="list-unstyled">
                    <li><i class="fa fa-location-arrow"></i><span style="margin-left: 16px;">No 112, Pyay Road, Near 8 Miles Junction,Mayangone Township, Yangon, Myanmar.</span></li><br>
                    <li><i class="fa fa-phone"></i><span style="margin-left: 16px;">Marketing &amp; Sales : (95)9 977933382 , (95)9 977933381, (95)9 977280220 <br> Ticketing : (95)9 977 280 210</span></li><br>
                    <li><i class="fa fa-envelope"></i><span style="margin-left: 16px;">info@wingsnwheelstours.com</span></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Legal</h4>
                <br>
                <ul class="list-unstyled">
                    <li><a href="#" target="_blank"><font color="white">Policy</font></a></li>
                    <li><a href="../WnW Project/assets/pdf/terms_of_use_eng.pdf" target="_blank"><font color="white">Terms of Use</font></a></li>
                    <li><a href="#" target="_blank"><font color="white">Go Beyond Trips Reward Program</font></a></li>
                    <li><a href="../WnW Project/assets/pdf/memberterms_us.pdf" target="_blank"><font color="white">Member Terms and Conditions</font></a></li>
                    <li><a href="../WnW Project/assets/pdf/member code of conduct_Eng.pdf" target="_blank"><font color="white">Member Code of Conduct</font></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
