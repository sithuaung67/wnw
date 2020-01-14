@extends('admin.layouts.master')
@section('css')

@endsection
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-pills ml-auto">
                                <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Personal Info</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Account Info</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Wallet Info</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Bank Detail</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12" style="background-color: white;height: 410px;">
                                                    <h5 style="color: blue;margin-bottom: 50px;margin-top: 20px;">Personal Information</h5>
                                                    <form method="" action="" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <label for="name">Full Name</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" placeholder="Name" name="name" id="name" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <label for="email">Email</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="email" placeholder="name@gmail.com" name="email" id="email" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <label for="date">Date of Joining</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" placeholder="28/11/2017" name="date" id="date" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <label for="phone">Mobile Number</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" placeholder="0967077585" name="phone" id="phone" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 form-group">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <label for="country">Country</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" placeholder="Myanmar" name="country" id="country" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
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
                                </div>
                                <div class="tab-pane" id="tab_2">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12" style="background-color: white;height: 410px;">
                                                    <h5 style="color: blue;margin-bottom: 50px;margin-top: 20px;">Account Information</h5>
                                                    <form method="" action="" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-md-6 form-group">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <label for="user_id">User ID</label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <input type="text" placeholder="000000" name="user_id" id="user_id" class="form-control" style="border-radius: 20px;background-color: whitesmoke">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 form-group">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label for="account_type">Account Type</label>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="radio"> Personal
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <input type="radio"> Personal
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
                                </div>
                                <div class="tab-pane" id="tab_3">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12" style="background-color: white;height: 410px;">
                                                    <h5 style="color: blue;margin-bottom: 50px;margin-top: 20px;">Points Collection</h5>
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-md-3 form-group">
                                                                <input type="text" class="form-control" placeholder="Loyaith Bonus Point" style="width: 100%;border-radius: 20px;background-color: whitesmoke" name="bonus_point" id="bonus_point">
                                                            </div>
                                                            <div class="col-md-3 form-group">
                                                                <input type="text" class="form-control" placeholder="Travel Points" style="width: 100%;border-radius: 20px;background-color: whitesmoke" name="travel_point" id="travel_point">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3">
                                                            <div class="col-md-3 form-group">
                                                                <input type="text" class="form-control" placeholder="Tour Packages Points" style="width: 100%;border-radius: 20px;background-color: whitesmoke" name="tour_package_point" id="tour_package_point">
                                                            </div>
                                                            <div class="col-md-3 form-group">
                                                                <input type="text" class="form-control" placeholder="Deposit Points" style="width: 100%;border-radius: 20px;background-color: whitesmoke" name="deposit_point" id="deposit_point">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="tab-pane" id="tab_4">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-sm-12" style="background-color: white;height: 410px;">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('script')

@endsection
