<?php

namespace App\Http\Controllers\Admin;

use App\McilRegionCategory;
use App\McilRegionInvestment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class McilRegionInvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions=McilRegionCategory::all();
        $region_investment=McilREgionInvestment::all();
        return view('admin.mcil.region_investment.index')->with(compact('region_investment','regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $region=McilRegionCategory::all();
        return view('admin.mcil.region_investment.create',compact('region'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'region'=>'required',
            'quantity'=>'required',
            'amount'=>'required',
        ]);
        $region=$request['region'];
        $quantity=$request['quantity'];
        $amount=$request['amount'];
        $region_investment=new McilRegionInvestment();
        $region_investment->mcil_region_category_id=$region;
        $region_investment->quantity=$quantity;
        $region_investment->amount=$amount;
        $region_investment->save();
        return redirect('/mcil/region/investment/index');
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
        $region_investment=McilRegionInvestment::whereId($id)->firstOrFail();
        $region_investment->mcil_region_category_id=$region;
        $region_investment->quantity=$quantity;
        $region_investment->amount=$amount;
        $region_investment->update();
        return redirect('/mcil/region/investment/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        McilRegionInvestment::destroy($id);
        return redirect()->back();
    }
}
