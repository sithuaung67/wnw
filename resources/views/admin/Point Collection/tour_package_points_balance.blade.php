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
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-6"><h1 style="color: blue">TOTAL TOUR PACKAGE POINTS BALANCE</h1></div>
                        @foreach($TourPointBalance as $Tour)
                        <div class="col-md-3">
                            <h1 style="color: grey">{{$Tour->total_point}} Points</h1>
                        </div>
                        @endforeach
                    </div><hr>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row table-responsive">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered table-hover" id="tour_table">
                                    <thead>
                                    <tr>
                                        <th>S.NO</th>
                                        <th>REMARK</th>
                                        <th>DEBIT</th>
                                        <th>CREDIT</th>
                                        <th>DATE</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($TourPointBalance as $Tour)
                                        <tr>
                                            <td>{{$Tour->id}}</td>
                                            <td>{{$Tour->remark}}</td>
                                            <td>{{$Tour->debit}}</td>
                                            <td>{{$Tour->credit}}</td>
                                            <td>{{$Tour->date}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    <script>
        $(function () {
            $("#tour_table").DataTable();
        });
    </script>
@endsection
