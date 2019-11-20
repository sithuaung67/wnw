<?php

namespace App\Http\Controllers\Admin;

use App\FilRegionCategory;
use App\FilRegionInvestment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilRegionInvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions=FilRegionCategory::all();
        $fil_region_investment=FilRegionInvestment::all();
        return view('admin.fil.region_investment.index')->with(compact('fil_region_investment','regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region=FilRegionCategory::all();
        return view('admin.fil.region_investment.create',compact('region'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $region=$request['region'];
        $quantity=$request['quantity'];
        $amount=$request['amount'];
        $fil_region_investment=new FilRegionInvestment();
        $fil_region_investment->fil_region_category_id=$region;
        $fil_region_investment->quantity=$quantity;
        $fil_region_investment->amount=$amount;
        $fil_region_investment->save();
        return redirect('/fil/region/investment/index');
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
    public function update(Request $request)
    {
        $id=$request['id'];
        $region=$request['region'];
        $quantity=$request['quantity'];
        $amount=$request['amount'];
        $fil_region_investment=FilRegionInvestment::whereId($id)->firstOrFail();
        $fil_region_investment->fil_region_category_id=$region;
        $fil_region_investment->quantity=$quantity;
        $fil_region_investment->amount=$amount;
        $fil_region_investment->update();
        return redirect('/fil/region/investment/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FilRegionInvestment::destroy($id);
        return redirect()->back();
    }
}
