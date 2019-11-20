@extends('admin.layouts.master')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Fil Region Investment</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a> </li>
                        <li class="breadcrumb-item active">Fil Region Investment</li>
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
                    <div class="card-header"><a href="{{route('get.FilRegionInvestmentCreate')}}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> add region investment </a> </div>

                    <div class="card-body table-responsive">
                        <table class="table table-hover table-bordered" id="fil_region_investment">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Region</th>
                                    <th>Quantities</th>
                                    <th>Amounts</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($fil_region_investment as $region)
                                <tr>
                                    <td>{{$region->id}}</td>
                                    <td>
                                        @foreach($regions as $reg)
                                            @if($region->fil_region_category_id==$reg->id)
                                                {{$reg->name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{$region->quantity}}</td>
                                    <td>{{$region->amount}}</td>
                                    <td>
                                        {{--<a href="{{route('get.McilRegionInvestmentEdit',['id'=>$region->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>--}}
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#e{{$region->id}}">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="e{{$region->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <form enctype="multipart/form-data" method="post" action="{{route('post.FilRegionInvestmentUpdate')}}">
                                                    <input type="hidden" name="id" value="{{$region->id}}">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="region">Region</label>
                                                                <select name="region" id="region" class="form-control">
                                                                    <option value="{{$region->fil_region_category_id}}">
                                                                        @foreach($regions as $reg)
                                                                            @if($region->fil_region_category_id==$reg->id)
                                                                                {{$reg->name}}
                                                                            @endif
                                                                        @endforeach
                                                                    </option>
                                                                    @foreach($regions as $reg)
                                                                        <option value="{{$reg->id}}">{{$reg->name}}</option>
                                                                    @endforeach
                                                                </select>

                                                            </div>
                                                            <div class="form-group">
                                                                <label for="quantity">Quantity</label>
                                                                <input type="number" value="{{$region->quantity}}" name="quantity" id="quantity" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="amount">Amount</label>
                                                                <input type="number" value="{{$region->amount}}" name="amount" id="amount" class="form-control">
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
                                        <form action="{{route('post.FilRegionInvestmentDestroy',['id'=>$region->id])}}" method="post" onclick="return confirm('Do you want to delete this item?')">
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
                                    <th>Region</th>
                                    <th>Quantities</th>
                                    <th>Amount</th>
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
        $("#fil_region_investment").dataTable({
            "bFilter" : true,
            "bPaginate": true,
            "bInfo": true
        });
    } );

</script>
@endpush

