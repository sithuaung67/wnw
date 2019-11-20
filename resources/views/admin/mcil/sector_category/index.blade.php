@extends('admin.layouts.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>MCIL Sector Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a> </li>
                        <li class="breadcrumb-item active">MCIL Sector Categories</li>
                        <li class="breadcrumb-item active">List</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><a href="{{route('get.McilSectorCategoryCreate')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> add sector categories </a> </div>

                    <div class="card-body table-responsive">
                        <table class="table table-hover table-bordered" id="sector_category">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($sector_category as $sector)
                                <tr>
                                    <td>{{$sector->id}}</td>
                                    <td>{{$sector->name}}</td>
                                    <td>
                                        {{--<a href="{{route('get.McilSectorCategoryEdit',['id'=>$sector->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>--}}
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#sector_category{{$sector->id}}">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="sector_category{{$sector->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form enctype="multipart/form-data" method="post" action="{{route('post.McilSectorCategoryUpdate')}}">
                                                    <input type="hidden" name="id" value="{{$sector->id}}">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" value="{{$sector->name}}" name="name" id="name" class="form-control">
                                                            </div>
                                                            @csrf
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <form action="{{route('post.McilSectorCategoryDestroy',['id'=>$sector->id])}}" method="post" onclick="return confirm('Do you want to delete this item?')">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Category Name</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('#sector_category').dataTable();
    } );
</script>
@endpush

