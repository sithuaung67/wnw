@extends('admin.layouts.master')


@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Sub Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
	<section class="content">
	 
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Sub Categories</h3>
                  
                <a href="{{route('sub-categories.index')}}" class="back btn btn-primary btn-sm"><i class="fa fa-angle-double-left"></i> Back to <span>lists</span></a>
                </div>
                <form action="{{route('sub-categories.store')}}" method="POST">
                  @csrf
                  <div class="card-body">

                    <div class="form-group">
                      <label for="">Main Categories Name</label>
                        <select name="main_category_id" id="" class="form-control">
                          <option value="">Choose Categories</option>
                          @foreach($mian_categories as $key=>$value)
                          <option value="{{$key}}" {{old('main_category_id')==$key ? 'selected' : ''}}>{{$value}}</option>
                          @endforeach
                        </select>
                      <span class="text-danger">{{ $errors->first('main_category_id') }}</span>

                    </div>

                    <div class="form-group">
                      <label for="">Sub Categories Name</label>
                      <input type="text" name="name" class="form-control" value="{{old('name')}}" id="" placeholder="enter name">
                      <span class="text-danger">{{ $errors->first('name') }}</span>

                    </div>

                    

                    <button type="submit" class="btn btn-primary">Create</button>
                    
                  </div>
                  
                </form>
            </div>
        </div>
    </div>
</div>
		
  </section>
    
@endsection
