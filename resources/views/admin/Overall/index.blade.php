@extends('admin.layouts.master')
@section('css')
    <style>
        .vl1 {
            border-left: 1px solid green;
            height: 100%;
            position: absolute;
            left: 33%;
            margin-left: -3px;
            top: 0;
        }
        .vl2 {
            border-left: 1px solid green;
            height: 100%;
            position: absolute;
            left: 66%;
            margin-left: -3px;
            top: 0;
        }
    </style>
@endsection
@section('content')
    <section class="content-header mb-4" style="background-color: lightgrey;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="height: 70px;">
                    <h1 style="color: blue">Overview</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body" style="height: auto;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class="fa fa-user-circle" style="font-size: 40px;"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <h6><b>E-Wallet</b></h6>
                                                <p style="color: grey">Balance in E-Wallet</p>
                                                <h4 style="color: blue">$ 224.00</h4>
                                            </div>
                                        </div>
                                        <hr style="border-top: 1px dashed grey;">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class="fa fa-user-circle" style="font-size: 40px;"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <h6><b>Commission Earned</b></h6>
                                                <p style="color: grey">Commissions and bonuses</p>
                                                <h4 style="color: goldenrod">$1,172.50</h4>
                                            </div>
                                        </div>
                                        <hr style="border-top: 1px dashed grey;">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class="fa fa-user-circle" style="font-size: 40px;"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <h6><b>Commission Withdrawn</b></h6>
                                                <p style="color: grey">Withdrawn from E-wallet</p>
                                                <h4 style="color: red">$ 0</h4>
                                            </div>
                                        </div>
                                        <hr style="border-top: 1px dashed grey;">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <i class="fa fa-user-circle" style="font-size: 40px;"></i>
                                            </div>
                                            <div class="col-md-10">
                                                <h6><b>Team Downlines</b></h6>
                                                <p style="color: grey">Total members in downline</p>
                                                <h4 style="color: blue">$ 7</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 vl1">a</div>
                                <div class="col-md-4 vl2">a</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')

@endsection
