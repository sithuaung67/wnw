<?php

namespace App\Http\Controllers\Admin;

use App\DepositPointBalance;
use App\LoyaltyPointBalance;
use App\TourPointBalance;
use App\TravelPointBalance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PointCollectionSummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Point Collection.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function tour()
    {
        $TourPointBalance=TourPointBalance::all();
        return view('admin.Point Collection.tour_package_points_balance',compact('TourPointBalance'));
    }
    public function travel()
    {
        $TravelPointBalance=TravelPointBalance::all();
        return view('admin.Point Collection.travel_points_balance',compact('TravelPointBalance'));
    }
    public function deposit()
    {
        $DepositPointBalance=DepositPointBalance::all();
        return view('admin.Point Collection.deposit_points_balance',compact('DepositPointBalance'));
    }
    public function loyalty()
    {
        $LoyaltyPointBalance=LoyaltyPointBalance::all();
        return view('admin.Point Collection.loyalty_points_balance',compact('LoyaltyPointBalance'));
    }
}
