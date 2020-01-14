<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/wwlogo.png">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/style/WnW.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <title>Contact Us</title>
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
            <h3 style="text-align:center; padding:50px 0 50px 0;color: #ddd;">Contact <span style="color: white;"><b>Us</b></span></h3>
        </div>

       </div>
   </div>
<!-- pagination end -->

<!-- Map Part Start -->
<div class="container" style="padding:80px 20px 80px 20px;">
    <div class="row">
        <div class="col-md-4 col-sm-5 col-xs-12">
            <h4 style="color:#06c;">Wings & Wheels Travels & Tours Co., Ltd.</h4>
            <br>
            <ul class="list-unstyled">
                <li><span class="contact">
                    <i class="fa fa-location-arrow"></i>
Address:
                    </span> <br>
No 112, Pyay Road, Near 8 Miles Junction,Mayangone Township, Yangon, Myanmar.
                </li><br>
                <li><span class="contact">
                    <i class="fa fa-phone"></i>
Phone No.:
                    </span> <br>
Marketing &amp; Sales : (95)9 977933382 , (95)9 977933381, (95)9 977280220 <br> Ticketing : (95)9 977 280 210
</li><br>
                <li><span class="contact">
                    <i class="fa fa-envelope"></i>
Email:
                    </span> <br>
info@wingsnwheelstours.com</li>
            </ul>
    </div>

        <div class="col-md-8 col-sm-7 col-xs-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3818.1480210672867!2d96.13851961418044!3d16.868570722001817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1swings%20%26%20wheels!5e0!3m2!1sen!2smm!4v1578634648945!5m2!1sen!2smm" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="">
            </iframe>
            <form action="/action_page.php">
                <div class="row" style="padding: 40px 0px 0px 0px;">
                    <div class="col-md-3" style="margin-bottom:20px;">
                        <span style="color:#06c; font-weight:700;">
    Your Name*:</span>
                    </div>
                    <div class="col-md-9" style="margin-bottom:20px;">
                        <input type="text" name="name">
                    </div>
                    <div class="col-md-3" style="margin-bottom:20px;">
                        <span style="color:#06c; font-weight:700;">
    Phone Number*:</span>
                    </div>
                    <div class="col-md-9" style="margin-bottom:20px;">
                        <input type="tel" name="phone">
                    </div>
                    <div class="col-md-3" style="margin-bottom:20px;">
                        <span style="color:#06c; font-weight:700;">
    Email*:</span>
                    </div>
                    <div class="col-md-9" style="margin-bottom:20px;">
                        <input type="email" name="email">
                    </div>
                    <div class="col-md-3" style="margin-bottom:20px;">
                        <span style="color:#06c; font-weight:700;">
    Your Company*:</span>
                    </div>
                    <div class="col-md-9" style="margin-bottom:20px;">
                        <input type="text" name="company">
                    </div>
                    <div class="col-md-3" style="margin-bottom:20px;">
                        <span style="color:#06c; font-weight:700;">
    Subject*:</span>
                    </div>
                    <div class="col-md-9" style="margin-bottom:20px;">
                        <input type="text" name="subject">
                    </div>
                    <div class="col-md-3" style="margin-bottom:20px;">
                        <span style="color:#06c; font-weight:700;">
    Your Question*:</span>
                    </div>
                    <div class="col-md-9" style="margin-bottom:20px;">
                        <input type="textarea" name="question">
                    </div>
                    <div class="send">
                    <input class="btn btn-primary" type="submit" value="Send">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Map Part End -->


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
