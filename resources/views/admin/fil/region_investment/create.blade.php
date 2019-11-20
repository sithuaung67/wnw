@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 50px;">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">Fil Region Investment</div>
                            <div class="col-md-6 text-right"><a href="{{route('get.FilRegionInvestmentIndex')}}" class="btn btn-primary">Back</a></div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form enctype="multipart/form-data" method="post" action="{{route('post.FilRegionInvestmentStore')}}">
                            <div class="form-group">
                                <label for="region">Region</label>
                                <select name="region" id="region" class="form-control">
                                    <option value="0">Select Region</option>
                                    @foreach($region as $regions)
                                    <option value="{{$regions->id}}">{{$regions->name}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">{{$errors->first('region')}}</span>


                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control">
                                <span class="text-danger">{{$errors->first('quantity')}}</span>

                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" id="amount" class="form-control">
                                <span class="text-danger">{{$errors->first('amount')}}</span>

                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
