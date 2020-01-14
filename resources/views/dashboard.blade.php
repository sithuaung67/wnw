@extends('admin.layouts.master')
@section('css')
@endsection
@section('content')
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <h1 style="color: blue">Dashboard</h1><hr>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="col-md-7 bg-light" style="height: 305px;box-shadow: 6px 6px 3px grey;margin-left: 10px;border-radius: 10px;">
                  <div class="row" style="color: white;margin-left: 5px">
                      <div class="col-md-6 col-xs-6 mt-4">
                          <!-- small box -->
                          <div class="small-box" style="background-color: blue;width: 97%;border-color: black">
                              <div class="inner" style="text-align: center">
                                  <h5>LOYALTY BONUS POINTS</h5><hr style="background-color: blue">
                                  <p>Total: 0000</p>
                              </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-md-6 col-xs-6 mt-4">
                          <!-- small box -->
                          <div class="small-box" style="background-color: blue;width: 95%;">
                              <div class="inner" style="text-align: center">
                                  <h5>TRAVEL POINTS</h5><hr style="background-color: blue">
                                  <p>Total: 0000</p>
                              </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-6 col-xs-6 mt-1">
                          <!-- small box -->
                          <div class="small-box" style="background-color: blue;width: 97%;">
                              <div class="inner" style="text-align: center">
                                  <h5>YOUR PACKAGE POINTS</h5><hr style="background-color: blue">
                                  <p>Total: 0000</p>
                              </div>
                          </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-6 col-xs-6 mt-1">
                          <!-- small box -->
                          <div class="small-box" style="background-color: blue;width: 95%;">
                              <div class="inner" style="text-align: center">
                                  <h5>DEPOSIT POINTS</h5><hr style="background-color: blue">
                                  <p>Total: 0000</p>
                              </div>
                          </div>
                      </div>
                      <!-- ./col -->
                  </div>
              </div>
              <div class="col-md-4 bg-light" style="height: 305px;box-shadow: 6px 6px 3px grey;margin-left: 30px;border-radius: 10px;">
                  <h3 style="text-align: center;padding: 15px;color: blue;margin-top: 10px;">Exchange Rate</h3>
                  <form style="text-align: center;margin-top: 30px;">
                      <div class="form-group">
                          <input type="text" style="width: 300px">
                      </div>
                      <div class="form-group">
                          <input type="text" style="width: 300px;margin-top: 20px;">
                      </div>
                  </form>
              </div>
              <div class="col-md-7 bg-light mt-4 mb-5" style="height: 350px;box-shadow: 6px 6px 3px grey;margin-left: 10px;border-radius: 10px;">
                  <div class="row">
                      <div class="col-md-6" style="text-align: center;color: blue">
                          <h2 class="mt-4">Your Profile</h2>
                          <i class="fa fa-user-circle" style="font-size: 100px;"></i>
                          <p><b>Name <br>ID : 123456</b></p>
                      </div>
                      <div class="col-md-6 mt-5 ">
                          <div class="row">
                              <div style="width: 92%;"><hr style="background-color: black;">
                                  <div class="row">
                                      <div class="col-md-6">Membership Status</div>
                                      <div class="col-md-6">: Premium</div>
                                  </div>
                              </div>
                              <div style="width: 90%;"><hr style="background-color: black;">
                                  <div class="row">
                                      <div class="col-md-6">Mobile</div>
                                      <div class="col-md-6">: 99999999</div>
                                  </div>
                              </div>
                              <div style="width: 90%;"><hr style="background-color: black;">
                                  <div class="row">
                                      <div class="col-md-6">Join Date</div>
                                      <div class="col-md-6">: 28/11/2018</div>
                                  </div>
                              </div>
                              <div style="width: 90%;"><hr style="background-color: black;">
                                  <div class="row">
                                      <div class="col-md-6">Country</div>
                                      <div class="col-md-6">: Myanmar</div>
                                  </div>
                              </div>
                              <div style="width: 90%;"><hr style="background-color: black;"></div>
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



