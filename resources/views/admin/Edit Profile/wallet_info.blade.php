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
                    <h5 style="color: blue;margin-bottom: 50px;margin-top: 20px;">Points Collection</h5>
                    <form>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                <input type="text" class="form-control" placeholder="Loyaith Bonus Point" style="width: 100%;border-radius: 20px;background-color: whitesmoke" name="bonus_point" id="bonus_point">
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="text" class="form-control" placeholder="Travel Points" style="width: 100%;border-radius: 20px;background-color: whitesmoke" name="travel_point" id="travel_point">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 form-group">
                                <input type="text" class="form-control" placeholder="Tour Packages Points" style="width: 100%;border-radius: 20px;background-color: whitesmoke" name="tour_package_point" id="tour_package_point">
                            </div>
                            <div class="col-md-3 form-group">
                                <input type="text" class="form-control" placeholder="Deposit Points" style="width: 100%;border-radius: 20px;background-color: whitesmoke" name="deposit_point" id="deposit_point">
                            </div>
                        </div>
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
