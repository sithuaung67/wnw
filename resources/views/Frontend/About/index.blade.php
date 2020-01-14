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
    <title>About Us</title>
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
<div class="container-fluid about">
    <div class="row" style="padding:100px 0 100px 0;">
        <div class="bgbox">
            <h3 style="text-align:left; margin-left: 200px; padding:50px 0 50px 0;color: #ddd;">About <span style="color: white;"><b>Us</b></span></h3>
        </div>

    </div>
</div>
<!-- pagination end -->
<!-- Team post start -->
<div class="container-fluid team">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <img src="assets/img/promotion1.jpeg" alt="Team Culture" style="width: 300px; height:250px;">
        </div>
        <div class="col-md-3">
            <h3 style="color:#06c">TEAM CULTURE</h3>
            <p>
                "Wings & Wheels Travels and Tours" was established in the year of 2014, under the license number Kha/2777 laid down by the Ministry of Hotels and Tourism Myanmar, also a member of Union of Myanmar Travel Association (UMTA).We are one of the efficient travels and tours service providers in Myanmar. We offering a wide variety of services to fulfill the differing needs of travelers with one-stop services,<br>which includes international and domestic .
            </p>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<!-- Team post end -->

<!-- story post start -->
<div class="container-fluid history">
    <h3 style="text-align: center; padding-top: 50px; color:#06c;">OUR STORY</h3>
    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-3 second">"Wings & Wheels Travels and Tours" was established in the year of 2014, under the license number Kha/2777 laid down by the Ministry of Hotels and Tourism Myanmar, also a member of Union of Myanmar Travel Association (UMTA).We are one of the efficient travels and tours service providers in Myanmar.<br><br>We offering a wide variety of services to fulfill the differing needs of travelers with one-stop services, which includes international and domestic ticketing, for individuals or groups, incentive tours, special interest/tailor-made tours, business trip and conference meetings.</div>
        <div class="col-md-3 second">"For Myanmar vacation we lounced with high resolotions to give the best service possible so thar your travel
            experience will be not just pleasant but totally memorable .Our Young energetic and friendly members are trained to attuns
            themselves to your needs your convenience, your likes and your preferences.<br><br>

            As Our name is Wings & Wheels Travels and Tours ,We believe In our Matto of connecting people to the other ends of the world
            without nostalgic feeling with our Quality Seivices we can guarantes you to render the service according to Our Motto of.
        </div>
        <div class="col-md-3"></div>


    </div>
    <p style="font-size:25px !important; font-family: 'Times New Roman'; line-height: 30px; text-align: center;padding-top: 20px; padding-bottom: 20px;letter-spacing: 1px; ">Ever Moving forwards into progess with <br> Customer's Satisfaction For Always!</p>
</div>
<!-- story post end -->

<!-- meet team start -->
<div class="container-fluid meet">
    <h5 style="text-align: center; padding: 70px 0 30px 0">MEET THE TEAMS</h5>
    <div class="row circlephoto">
        <div class="col-md-2"></div>
        <div class="col-md-2">
            <img src="assets/img/user1.jpeg" alt="..." class="rounded-circle">
            <h5>Mr.Name</h5>
            <p>Founder</p>
        </div>
        <div class="col-md-2">
            <img src="assets/img/user1.jpeg" alt="..." class="rounded-circle">
            <h5>Mr.Name</h5>
            <p>Founder</p>
        </div>
        <div class="col-md-2">
            <img src="assets/img/user1.jpeg" alt="..." class="rounded-circle">
            <h5>Mr.Name</h5>
            <p>Founder</p>
        </div>
        <div class="col-md-2">
            <img src="assets/img/user1.jpeg" alt="..." class="rounded-circle">
            <h5>Mr.Name</h5>
            <p>Founder</p>
        </div>
        <div class="col-md-2"></div>

    </div>

    <div class="row ">
        <div class="col-md-2"></div>
        <div class="col-md-2">
            <img src="assets/img/user1.jpeg" alt="..." class="rounded-circle">
            <h5>Mr.Name</h5>
            <p>Founder</p>
        </div>
        <div class="col-md-2">
            <img src="assets/img/user1.jpeg" alt="..." class="rounded-circle">
            <h5>Mr.Name</h5>
            <p>Founder</p>
        </div>
        <div class="col-md-2">
            <img src="assets/img/user1.jpeg" alt="..." class="rounded-circle">
            <h5>Mr.Name</h5>
            <p>Founder</p>
        </div>
        <div class="col-md-2">
            <img src="assets/img/user1.jpeg" alt="..." class="rounded-circle">
            <h5>Mr.Name</h5>
            <p>Founder</p>
        </div>
        <div class="col-md-2"></div>

    </div>
</div>
<!-- meet team end -->

<!-- brand post start -->
<div class="container-fluid brand">
    <h3 style="padding-left: 100px; color: #06c;">OUR BRANDS</h3>
    <p>Our Brands live under Wind&Wheels travel and ready to provide the up service to the community with joy, and ready<br> to go a journery thar beyond to traditional trip. Got to know our brand family </p>

</div>
<!-- brand post end -->

<div class="container-fluid final">
    <div class="row">
        <div class="col-md-6">
            <img src="assets/img/wwlogo.png" alt=""style="width:200px; height=200px;"><br><br>
            <p>"For Myanmar vacation we lounced with high resolotions to give the best service possible so thar your travel experience will be not just pleasant but totally memorable .Our Young energetic and friendly members are trained to attuns themselves to your needs your convenience, your likes and your preferences.</p>
        </div>
        <div class="col-md-6">
            <h2 style="color:#06c;font-family:Egyptia XBold;">GO BEYOND TRIPS</h2>
            <p style="letter-spacing: 15px;">TRAVEL  ClUB</p>
            <p>"For Myanmar vacation we lounced with high resolotions to give the best service possible so thar your travel experience will be not just pleasant but totally memorable .Our Young energetic and friendly members are trained to attuns themselves to your needs your convenience, your likes and your preferences.</p>


        </div>
    </div>
</div>

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



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
