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
    <title>Membership</title>
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
<div class="container-fluid membership">
    <div class="row" style="padding:100px 0 100px 0;">
        <div class="bgbox">
            <h3 style="text-align:center; padding:50px 0 50px 0;color: #ddd;">Your Journey Starts <span style="color: white;"><b>Here</b></span></h3>
        </div>

    </div>
</div>
<!-- pagination end -->

<!-- Video Part Start -->
<div class="container" style="padding:80px 0 80px 0;">
    <div class="row">
        <div class="col-md-6 col-sm-5 col-xs-12">
            <video controls="" class="embed-responsive-item" width="100%">
                <source src="http://uat.wingsnwheelstours.com/static/media/home_page_travel.7d59b9c0.m4v" type="video/mp4">
            </video>
        </div>

        <div class="col-md-6 col-sm-5 col-xs-12">
            <p style="text-align: justify;"><font style="font-size: 25px; font-weight:600;">THE DREAMTRIPS MEMBERSHIP</font>
                <br><br>The Dreamtrips membership invites you to join a global travel and entertainment community of dreamers,adventures
                and escaplsta, beautiful in our diverstly and unlted by threads of curiolty and hope. As we traverse the world together,
                we are transformed by the cultures colors and landscape to became a part of something bigger than our selves.
                We are exposed to truths that were unknown to us before we took the plurige into a lifestyle defined by togetherness
                exploration and rich experiences.In short,This is no ordinary vocation - It's a DreamTrips.
            </p>

        </div>
    </div>
</div>
<!-- Video Part End -->

<!-- Commitment start -->
<div class="container-fluid commit">
    <div class="row" style="padding:200px 0 0px 0;">
        <div class="commitbox">
            <h3 style="text-align:left; padding:50px 100px 20px 100px; color: #ddd;">OUR COMMITMENT</h3>
            <p style="color:#fff; padding:0px 100px 30px 100px;">Rest assured, when you become a Wings & Wheels Travels and Tours Member, we'll work tirelessly. Defined by trust and transparency, we'll find a way to discover
                what is unique and meaningful in the world around you. That’s why, at every turn, we strive to bring our members more value and support
                by listening to feedback and continuously improving on already incredible products.</p>
        </div>

    </div>
</div>
<!-- Commitment end -->

<!-- Kinds start -->
<div class="container-fluid">
    <div class="row">
        <div class="kinds" style="padding:80px 100px 80px 100px;">
            <ul style="column-count: 3; color:#fff; font-size:20px;">
                <li>Access To Go Beyond Trips</li>
                <li>Discounting From Affiliate Merchant Partner</li>
                <li>Kick Off Party</li>
                <li>Earn Points To Save Your Journey</li>
                <li>Access to Volun Tours</li>

            </ul>
        </div>
    </div>
</div>
<!-- Kinds end -->

<!-- Member start -->
<div class="container-fluid">
    <div class="row">
        <div class="member" style="padding:80px 100px 80px 100px;">
            <h3 style="text-align:center; padding:50px 100px 20px 100px; color: #ddd;">BECOME A MEMBER</h3>
            <p style="text-align:center; color:#fff; padding:0px 150px 30px 150px; ">Your journey means the world to us.
                While our backgrounds and stories are unique, on every Wings & Wheels
                Travels and Tours we come together to share our perspective and live life to the fullest.
                Join an inclusive and insightful community that thrives on awareness,
                experience and togetherness. You Should Be Here!</p>
            <p style="text-align:center;">
                <a href="{{url('frontend_member_new')}}" type="button" class="btn btn-join-us" style="border: 2px solid white; padding:15px 30px; color:#fff;">JOIN US</a>
            </p>

        </div>
    </div>
</div>
<!-- Member end -->

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
