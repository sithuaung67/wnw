@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 50px;">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">Fil Region Category</div>
                            <div class="col-md-6 text-right"><a href="{{route('get.FilRegionCategoryIndex')}}" class="btn btn-primary">Back</a></div>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form enctype="multipart/form-data" method="post" action="{{route('post.FilRegionCategoryStore')}}">
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                                <span class="text-danger">{{$errors->first('name')}}</span>

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