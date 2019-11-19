<?php

namespace App\Http\Controllers;

use App\SezZoneInvestment;
use Illuminate\Http\Request;
use App\SezZoneCategory;

class SezZoneInvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sez_zone_investments=SezZoneInvestment::all();
        $sez_zone_categories=SezZoneCategory::pluck('name','id');
        return view('admin.sez.zone-investment.index', compact('sez_zone_investments','sez_zone_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $sez_zone_categories=SezZoneCategory::pluck('name','id');
        return view('admin.sez.zone-investment.create', compact('sez_zone_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SezZoneInvestment::create($request->all());

        return redirect('sez-zone-investment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SezZoneInvestment  $sezZoneInvestment
     * @return \Illuminate\Http\Response
     */
    public function show(SezZoneInvestment $sezZoneInvestment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SezZoneInvestment  $sezZoneInvestment
     * @return \Illuminate\Http\Response
     */
    public function edit(SezZoneInvestment $sezZoneInvestment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SezZoneInvestment  $sezZoneInvestment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        SezZoneInvestment::find($id)->update($request->all());

        return redirect('sez-zone-investment');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SezZoneInvestment  $sezZoneInvestment
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        SezZoneInvestment::destroy($id);

        return redirect('sez-zone-investment');

    }
}
