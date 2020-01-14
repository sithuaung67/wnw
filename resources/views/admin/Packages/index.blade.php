@extends('admin.layouts.master')
@section('css')
<style>
.gallery > li > img {
    width: 285px;
    height: 150px;
    border-radius: 5px;
}
.gallery {
    width: 100%;
    margin: 0;
    padding: 0;
}
.gallery li {
    display: none;
    float: left;
    list-style: none;
    margin-right: 10px;
}
.more, .less {
    background-color: #000;
    clear: both;
    color: #fff;
    cursor: pointer;
    display: block;
    font-size: 14px;
    margin-top: 6px;
    padding: 6px 0;
    text-align: center;
    text-transform: uppercase;
    width: 320px;
}
    #packages_style > div > a {
        color: black;
    }

</style>
<link rel="shortcut icon" href="{{asset('assets/img/wwlogo.png')}}">
<link rel="stylesheet" href="{{asset('assets/style/WnW.css')}}">
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-2" id="packages_style">
                    <div class="mt-3">
                        <a href="{{route('package_view')}}">Buy Packages</a>
                    </div>
                    <div class="mt-3">
                        <a href="{{route('package_table')}}">My Packages</a>
                    </div>
                </div>

                <div class="col-sm-10">
                    <div class="row">
                        <!-- pagination start -->
                        <div class="container-fluid about">
                            <div class="row" style="padding:100px 0 100px 0;">
                                <div class="bgbox">
                                    <h3 style="text-align:left; margin-left: 200px; padding:50px 0 50px 0;color: #ddd;">About <span style="color: white;"><b>Us</b></span></h3>
                                </div>
                            </div>
                        </div>
                        <!-- pagination end -->
                    </div>

                            {{--                <div class="col-sm-10">--}}
{{--                    <div class="row">--}}
{{--                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 100%">--}}
{{--                            <div class="carousel-inner">--}}
{{--                                <div class="carousel-item">--}}
{{--                                    <img class="d-block w-100"  src="{{URL::to('image/tour1.jpg')}}" style="height: 280px;" alt="First slide">--}}
{{--                                    <div class="carousel-caption" style="text-align: left">--}}
{{--                                        <h5><i class="fas fa-mobile"></i> PC-Banner-1920</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="carousel-item">--}}
{{--                                    <img class="d-block w-100" src="{{URL::to('image/tour2.jpg')}}" style="height: 250px;" alt="Second slide">--}}
{{--                                    <div class="carousel-caption" style="text-align: left">--}}
{{--                                        <h5><i class="fas fa-mobile"></i> Mi9Global</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="carousel-item">--}}
{{--                                    <img class="d-block w-100" src="{{URL::to('image/tour3.jpg')}}" style="height: 280px;" alt="Third slide">--}}
{{--                                    <div class="carousel-caption" style="text-align: left">--}}
{{--                                        <h5><i class="fas fa-mobile"></i> MIX-3-banner-PC</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="carousel-item">--}}
{{--                                    <img class="d-block w-100" src="{{URL::to('image/tour4.jpeg')}}" style="height: 280px;" alt="Fourth slide"><div class="carousel-caption" style="text-align: left">--}}
{{--                                        <h5>Mi9</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="carousel-item">--}}
{{--                                    <img class="d-block w-100" src="{{URL::to('image/tour7.jpg')}}" style="height: 280px" alt="Fifth slide">--}}
{{--                                    <div class="carousel-caption" style="text-align: left">--}}
{{--                                        <h5 style="color: black "><i class="fas fa-mobile"></i> Xiaomi-Mi-9-Igeekphone-5</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="carousel-item active">--}}
{{--                                    <img class="d-block w-100"  src="{{URL::to('image/tour8.jpg')}}" style="height: 280px;" alt="Six slide">--}}
{{--                                    <div class="carousel-caption" style="text-align: left">--}}
{{--                                        <h5><i class="fas fa-mobile"></i> PC-Banner-1920</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <form style="margin-top: 20px;">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="main_category" id="main_category" class="form-control">
                                        <option value="">Choose</option>
                                        <option value="">A</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="main_category" id="main_category" class="form-control">
                                        <option value="">Choose</option>
                                        <option value="">A</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="main_category" id="main_category" class="form-control">
                                        <option value="">Choose</option>
                                        <option value="">A</option>
                                        <option value="">B</option>
                                        <option value="">C</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-warning" style="height: auto;width: 40%">Apply</button>
                                    <button type="submit" class="btn btn-sm btn-warning" style="height: auto;width: 40%">Apply</button>
                                </div>
                            </div>
                        </div>
                    </form>
{{--                    <div class="row ml-1">--}}
{{--                    <ul class="gallery">--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour8.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour8.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour8.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour8.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour8.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour8.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                        <li class="mb-2"><img src="{{URL::to('image/tour3.jpg')}}" /></li>--}}
{{--                    </ul>--}}
{{--                    <a class="col-md-12 more mt-3 bg-light">Show more</a>--}}
{{--                    <a class="col-md-12 less mb-4 bg-light">Show Less</a>--}}
{{--                    </div>--}}

                    <div class="row ml-2 mr-2" id="gallery">
                        @foreach($package as $jnew)
                            <div class="col-sm-12 col-md-4 mt-2">
                                <div class="card shadow" style="background: blue;color: whitesmoke">
{{--                                    <div class="card-body">--}}
                                        <img src="{{route('view.image',['img_name'=>$jnew->package_img])}}" class="card-img-top img-thumbnail" >
                                        <p class="card-text text-center" style="font-size: 20px"></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6> {{$jnew->package_name}}</h6>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <button type="button" class="btn btn-light btn-sm text-dark" data-toggle="modal" data-target="#aa{{$jnew->id}}">
                                                    View Detail
                                                </button>
                                            </div>
                                        </div>
{{--                                    </div>--}}
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="aa{{$jnew->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">{{$jnew->package_name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            {{$jnew->region}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <div class="row mb-5 mt-4" style="text-align: center">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
{{--                            <a href="" class="btn btn-sm btn-success" style="color: white;width: 250px;">PAY WITH CARD</a>--}}
                            <button id="hide">Hide</button>
                            <button id="show">Show</button>                        </div>
                        <div class="col-md-4">
                            <a href="" class="btn btn-sm btn-warning" style="color: white;width: 250px;">PAY WITH POINTS</a>
                        </div>
                        <div class="col-md-2"></div>
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
    <script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $("#gallery").hide(1000);
            });
            $("#show").click(function(){
                $("#gallery").show();
            });
        });
    </script>
<script>
    $(document).ready(function () {
        $('.card img:lt(2)').show();
        $('.less').hide();
        var items =  1000;
        var shown =  6;
        $('.more').click(function () {
            $('.less').show();
            shown = $('.gallery li:visible').length+6;
            if(shown< items) {
                $('.gallery li:lt('+shown+')').show(300);
            } else {
                $('.gallery li:lt('+items+')').show(300);
                $('.more').hide();
            }
        });
        $('.less').click(function () {
            $('.gallery li').not(':lt(6)').hide(300);
            $('.more').show();
            $('.less').hide();
        });
    });
</script>
@endsection
