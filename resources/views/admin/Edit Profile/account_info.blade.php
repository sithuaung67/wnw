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
                    <h5 style="color: blue;margin-bottom: 50px;margin-top: 20px;">Account Information</h5>
                    <form method="" action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="user_id">User ID</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="000000" name="user_id" id="user_id" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="account_type">Account Type</label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="radio"> Personal
                                    </div>
                                    <div class="col-md-2">
                                        <input type="radio"> Personal
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
