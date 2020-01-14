<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Wings and Wheels</title>

    <link rel="shortcut icon" href="assets/img/wwlogo.png">
    <link rel="stylesheet" href="assets/style/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/style/WnW.css">
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

<!-- Slider Start -->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
            <img class="d-block w-100" src="assets/img/bagan.JPG"
                 alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/bagan.JPG"
                 alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
            <img class="d-block w-100" src="assets/img/bagan.JPG"
                 alt="Third slide">
        </div>
        <!--/Third slide-->
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--Slider End-->

<div class="container-fluid" align="center" style="background-color: rgb(220, 220, 220);">
    <h4><br>At<font color="#0066CC"> Wings and Wheels</font>, we believe what you do is an extension of who you are.</h4>
    <font><nobr> Through servant leadership and a culture of gratitude, we cnhance our purpose and possibility, and create joy throughout the globe. We are made better through our experiences together,</nobr><br>realizing each day the true meaning of fun, freedom and fulfillment.<br><br></font>
</div>

<!-- Video Part Start -->
<div class="container" style="padding:80px 0 80px 0;">
    <div class="row">
        <div class="col-md-6 col-sm-5 col-xs-12">
            <video controls="" class="embed-responsive-item" width="100%">
                <source src="http://uat.wingsnwheelstours.com/static/media/home_page_travel.7d59b9c0.m4v" type="video/mp4">
            </video>
        </div>

        <div class="col-md-6 col-sm-5 col-xs-12">
            <p style="text-align: justify;"><font style="font-size: 25px; font-weight:600;">EXPERIENCE THE WORLD TOGETHER</font>
                <br><br>Join a community of life-enthusiasts whose thirst for adventure
                knows no bounds, poised to take a journey of self-discovery
                through shared experiences and the transformative power of
                travel. As an industry-leader in social travel with a diverse set of
                product offerings, we provide you access to thousands of curated
                trips to some of the most sought-after destinations worldwide
                through our transparent direct-selling model.
                <br><br>We believe the best way to experience the world is together,
                because together goes further. Welcome to Wings &amp; Wheels Travels and Tours.
            </p>
            <a href="#"><button class="btn btn-primary">
                    EXPLORE GO BEYOND TRIPS</button></a>
        </div>
    </div>
</div>
<!-- Video Part End -->

<!--Footer Start-->
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
<!--Footer End-->


<script src="assets/script/jquery.js"></script>
<script src="assets/script/bootstrap.min.js"></script>
<script src="assets/script/tether.js"></script>

</body>
</html>
