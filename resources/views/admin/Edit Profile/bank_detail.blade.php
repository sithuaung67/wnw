@extends('admin.layouts.master')
@section('css')

@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="background-color: white;height: 410px;">
                    <div class="row" style="text-align: center;margin-top: 50px;">
                        <div class="col-md-2"></div>
                        <div class="col-md-2">
                            <a href="{{route('edit_profile/personal_info')}}" class="btn btn-sm btn-outline-primary" style="color: black">Personal Info</a>
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('edit_profile/account_info')}}" class="btn btn-sm btn-outline-primary" style="color: black">Account Info</a>
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('edit_profile/wallet_info')}}" class="btn btn-sm btn-outline-primary" style="color: black">Wallet Info</a>
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('edit_profile/bank_detail')}}" class="btn btn-sm btn-outline-primary" style="color: black">Bank Detail</a>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <hr>
                    <h5 style="color: blue;margin-bottom: 50px;margin-top: 20px;">Bank Details</h5>
                    <form method="" action="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="account_holder_name">Account Holder Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Name" name="account_holder_name" id="account_holder_name" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="bank_name">Bank Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Bank" name="bank_name" id="bank_name" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="account_number">Account Number</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="111222333444" name="account_number" id="account_number" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="branch">Branch</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" placeholder="Branch" name="branch" id="branch" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <div class="row">
                                    <div class="col-md-5">
                                        <label for="id_passport_proof">ID/Passport Proof</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="id_passport_proof" id="id_passport_proof" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 form-group" style="text-align: right">
                                <button type="submit" class="btn btn-sm btn-primary">Update</button>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')
    {{--<script>--}}
    {{--    $(function () {--}}
    {{--        $("#package_table").DataTable();--}}
    {{--    });--}}
    {{--</script>--}}
@endsection
