@extends('admin.layouts.master')


@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sez Zone Investments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Zone Investments</li>
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
                <h3 class="card-title">Sez Zone Investments</h3>
                  
                <a href="{{route('sez-zone-investment.index')}}" class="back btn btn-primary btn-sm"><i class="fa fa-angle-double-left"></i> Back to <span>lists</span></a>
                </div>
                <form action="{{route('sez-zone-investment.store')}}" method="POST">
                  @csrf
                  <div class="card-body">

                    <div class="form-group ">
                      <label for="">Sez Zone Categories</label>
                        <select name="sez_zone_category_id" id="sez_zone_category_id"  class="form-control">
                          <option value="">Choose Categories</option>
                          @foreach($sez_zone_categories as $key=>$value)
                          <option value="{{ $key }}" {{ old('sez_zone_category_id') == $key ? 'selected' : '' }}>{{$value}}</option>
                          @endforeach
                        </select>
                        <span class="text-danger">{{ $errors->first('sez_zone_category_id') }}</span>
                    </div>

                    <div class="form-group">
                      <label for="">Quantity</label>
                      <input type="text" name="quantity" class="form-control" id="" placeholder="enter quantity"  value="{{ old('quantity') }}">
                      <span class="text-danger">{{ $errors->first('quantity') }}</span>
                    </div>

                    <div class="form-group">
                      <label for="">Amount  </label>
                      <input type="text" name="amount" class="form-control" id="" placeholder="enter amount" value="{{old('amount')}}">
                      <span class="text-danger">{{ $errors->first('amount') }}</span>
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
