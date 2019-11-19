@extends('admin.layouts.master')


@section('content')
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sez Zone Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
              <li class="breadcrumb-item active">Zone Categories</li>
              <li class="breadcrumb-item active">Lists</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
	<section class="content">
      	<div class="row">
	        <div class="col-md-12">
	          	<div class="card">
		            <div class="card-header">
		              <a href="{{route('sez-zone-investment.create')}}" class="btn btn-primary btn-sm">
		              <i class="fa fa-plus"></i> add zone investment</a>
		            </div>
		            <!-- /.card-header -->
		            <div class="card-body">
			            <table id="example2" class="table table-bordered table-strip">
			                <thead>
			                <tr>
			                  <th>ID</th>
			                  <th>Zone Categories</th>
			                  <th>Quantity</th>
			                  <th>Amount</th>
			                  <th></th>
			                  <th></th>
			                 
			                </tr>
			                </thead>
			                <tbody>
			                	@foreach($sez_zone_investments as $val)
			                	<tr>
			                		
				                	<td>{{$val->id}}</td>
				                	<td>{{$val->SezZoneCategory->name}}</td>
				                	<td>{{$val->quantity}}</td>
				                	<td>{{$val->amount}}</td>
				                	<td>
				                		<a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#sez-zone-investment{{$val->id}}"><i class="fa fa-edit"></i></a>
				                	</td>
				                	<td>
				                		<form action="{{route('sez-zone-investment.destroy',$val->id)}}" method="post" onclick="return confirm('Do you want to delete this item?')">
				                			@csrf
				                			@method('delete')
				                			<button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
				                		</form>
				                	</td>
				                	<div class="modal fade" id="sez-zone-investment{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  	<div class="modal-dialog" role="document">
									    <div class="modal-content">
										     <div class="modal-header">
										        <h5 class="modal-title" id="sez-zone-category{{$val->id}}">Edit</h5>
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
										          <span aria-hidden="true">&times;</span>
										        </button>
										     </div>
									      	<div class="modal-body">
									       		<form action="{{route('sez-zone-investment.update',[$val])}}" method="POST">
						                  			@csrf
						                  			@method('PATCH')
									                 <div class="card-body">
									                   <div class="form-group">
									                      <label for="">Quantity</label>
									                        <select name="sez_zone_category_id" id="" class="form-control">
									                          <option value="">Choose Categories</option>
									                          @foreach($sez_zone_categories as $key=>$value)
									                          		<option value="{{ $key }}" {{ $val->sez_zone_category_id == $key ? "selected" : "" }}>{{$value}}</option>
									                          @endforeach
									                        </select>
									                    </div>

									                    <div class="form-group">
									                      <label for="">Quantity</label>
									                      <input type="text" name="quantity" class="form-control" value="{{$val->quantity}}" id="" placeholder="enter quantity">
									                    </div>

									                    <div class="form-group">
									                      <label for="">Amount  </label>
									                      <input type="text" name="amount" class="form-control" id="" value="{{$val->amount}}" placeholder="enter amount">
									                    </div>

									                </div>
												    <div class="modal-footer">
												        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												        <button type="submit" class="btn btn-primary">Update</button>
												    </div>
						                		</form>
									    	</div>
								    	</div>
								  	</div>
									</div>
			                	</tr>
								@endforeach

			                </tbody>
			                
			            </table>
						
						  
						</div>
		            </div>
	          	</div>
	         </div>

	         <!-- for Edit-->

	        
       
    </section>
@endsection

@push('scripts')
<script>
  $(function () {
    $("#example2").DataTable();
   
  });
</script>

@endpush