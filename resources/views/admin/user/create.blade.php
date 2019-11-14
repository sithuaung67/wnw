@extends('backend.layouts.master')

@section('css')

	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">
	
@endsection

@section('content')

<section class="content-header">
	<h1>
		Articles
		<small>Add article</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Admin</a></li>
		<li><a href="">Article</a></li>
		<li class="active">Add</li>
	</ol>
</section>
<section class="content">

	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Article</h3>

		</div>
		<div class="box-body">
			<a href="{{route('admin.articles.index')}}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-angle-double-left"></i> Back to <span>lists</span></a><br><br>
			<div class="row m-t-20">
				<div class="col-md-8 col-md-offset-2">
					@include('error.error')
					<form action="{{route('admin.articles.store')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<label for="category">Category</label>
							<select class="form-control" name="articlecat">
								<option value="">Choose Article Category</option>
								@foreach($articleCats as $key=>$value)

									<option value="{{$key}}">{{$value}}</option>

								@endforeach
							</select>
						</div>
						
						<div class="form-group">
							<label for="">Article(English)</label>
							<input type="text" name="en_title" id="" class="form-control">


						</div>
						<div class="form-group">
							<label for="">Article(Myanmar)</label>
							<input type="text" name="mm_title" id="" class="form-control">


						</div>
						<div class="form-group">
							<label for="">Slug(url)</label>
							<input type="text" name="slug" id="" class="form-control">


						</div>
						<div class="form-group">
							<label for="file">Choose Image</label>
							<input type="file" name="image" class="form-control" autofocus>
						</div>
						<div class="form-group">
							<label for="description">Description(English)</label>
							<textarea name="en_description" id="en_description" cols="30" rows="10" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<label for="description">Description(Myanmar)</label>
							<textarea name="mm_description" id="mm_description" cols="30" rows="10" class="form-control"></textarea>
						</div>
						
						<button type="submit" class="btn btn-primary">Create</button>
					</form>
				</div>
			</div>
		</div>

	</div>
</section>


@endsection
@section('script')

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>

	<script>
		
	$(document).ready(function() {

           $('#en_description').summernote({

             height:250,
             dialogsInBody: true,
            callbacks:{
                onInit:function(){
                $('body > .note-popover').hide();
                }
             },

           });

       });
	</script>
	<script>
		
	$(document).ready(function() {

           $('#mm_description').summernote({

             height:250,
             dialogsInBody: true,
            callbacks:{
                onInit:function(){
                $('body > .note-popover').hide();
                }
             },

           });

       });
	</script>
@endsection