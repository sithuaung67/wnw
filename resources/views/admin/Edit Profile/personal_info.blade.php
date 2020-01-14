@extends('admin.layouts.master')
@section('css')

@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="background-color: white;height: 410px;">
                    <div class="row" style="text-align: center;margin-top: 50px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <a href="{{route('edit_profile/personal_info')}}" class="btn btn-sm btn-outline-primary" style="color: black">Personal Info</a>
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('edit_profile/account_info')}}" class="btn btn-sm btn-outline-primary" style="color: black">Account Info</a>
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('edit_profile/wallet_info')}}" class="btn btn-sm btn-outline-primary" style="color: black">Wallet Info</a>
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('edit_profile/bank_detail')}}" class="btn btn-sm btn-outline-primary" style="color: black">Bank Detail</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <hr>
                    <h5 style="color: blue;margin-bottom: 50px;margin-top: 20px;">Personal Information</h5>
                    <form method="" action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="name">Full Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Name" name="name" id="name" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" placeholder="name@gmail.com" name="email" id="email" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="date">Date of Joining</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="28/11/2017" name="date" id="date" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="phone">Mobile Number</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="0967077585" name="phone" id="phone" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="country">Country</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Myanmar" name="country" id="country" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group" style="text-align: right">
                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    {{--<script>--}}
    {{--    $(function () {--}}
    {{--        $("#package_table").DataTable();--}}
    {{--    });--}}
    {{--</script>--}}
@endsection
