@extends('admin.layouts.master')
@section('css')
    <style>
        #package_style > div > a {
            color: black;
        }
        thead > tr{
            background-color: blue;
            color: white;
        }
    </style>
@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2" id="package_style">
                    <div class="mt-3">
                        <a href="{{route('package_view')}}">Buy Packages</a>
                    </div>
                    <div class="mt-3">
                        <a href="{{route('package_table')}}">My Packages</a>
                    </div>
                    <div class="mt-3">
                        <a href="{{route('package_create')}}">Create Packages</a>
                    </div>
                </div>

                <div class="col-sm-10 mt-4">
                    <div class="row table-responsive">
                        <table class="table table-bordered" id="package_table">
                            <thead>
                            <tr>
                                <th>NO</th>
                                <th>MEMBER ID</th>
                                <th>MEMBER NAME</th>
                                <th>BUYING DATE</th>
                                <th>TRIPS</th>
                                <th>AMOUNT</th>
                                <th>TOTAL POINTS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($MyPackage as $package)
                            <tr>
                                <td>{{$package->id}}</td>
                                <td>{{$package->member_id}}</td>
                                <td>{{$package->member_name}}</td>
                                <td>{{$package->buy_date}}</td>
                                <td>{{$package->trip}}</td>
                                <td>{{$package->amount}}</td>
                                <td>{{$package->total_point}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
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
