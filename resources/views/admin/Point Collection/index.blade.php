@extends('admin.layouts.master')
@section('css')

@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="background-color: white;height: 410px;">
                    <h5 style="color: blue;margin-bottom: 50px;margin-top: 20px;">Points Collection Summary</h5>
                    <form>
                        <div class="row">
                            <div class="col-md-3 form-group">
                                <a href="{{route('loyalty_points_balance')}}" class="btn btn-sm btn-outline-primary" style="color: black;border-radius: 15px;width: 100%;">Loyalty Points Balance</a>
                            </div>
                            <div class="col-md-3 form-group">
                                <a href="{{route('travel_points_balance')}}" class="btn btn-sm btn-outline-primary" style="color: black;border-radius: 15px;width: 100%;">Travel Points Balance</a>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3 form-group">
                                <a href="{{route('tour_points_balance')}}" class="btn btn-sm btn-outline-primary" style="color: black;border-radius: 15px;width: 100%;">Tour Package Points Balance</a>
                            </div>
                            <div class="col-md-3 form-group">
                                <a href="{{route('deposit_points_balance')}}" class="btn btn-sm btn-outline-primary" style="color: black;border-radius: 15px;width: 100%;">Deposit Point Balance</a>
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
