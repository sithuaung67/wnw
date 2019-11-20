@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top: 50px;">
                <div class="card">
                    <div class="card-header">
                       
                            <div class="col-md-6">Mcil Sector Categories</div>
                            <a href="{{route('get.McilSectorCategoryIndex')}}" class="back btn btn-primary btn-sm"><i class="fa fa-angle-double-left"></i> Back to <span>lists</span></a>
                            {{-- <div class="col-md-6 text-right"><a href="{{route('get.McilSectorCategoryIndex')}}" class="btn btn-primary">Back</a></div> --}}
                        
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form enctype="multipart/form-data" method="post" action="{{route('post.McilSectorCategoryStore')}}">
                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                                <span class="text-danger">{{ $errors->first('name') }}</span>

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
