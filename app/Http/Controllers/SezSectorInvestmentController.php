<?php

namespace App\Http\Controllers;

use App\SezSectorInvestment;
use Illuminate\Http\Request;
use App\SezSectorCategory;

class SezSectorInvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sez_sector_investments=SezSectorInvestment::all();
        $sez_sector_categories=SezSectorCategory::pluck('name','id');

        return view('admin.sez.sector-investment.index',compact('sez_sector_investments','sez_sector_categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $sez_sector_categories=SezSectorCategory::pluck('name','id');
        return view('admin.sez.sector-investment.create', compact('sez_sector_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SezSectorInvestment::create($request->all());

        return redirect('sez-sector-investment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SezSectorInvestment  $sezSectorInvestment
     * @return \Illuminate\Http\Response
     */
    public function show(SezSectorInvestment $sezSectorInvestment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SezSectorInvestment  $sezSectorInvestment
     * @return \Illuminate\Http\Response
     */
    public function edit(SezSectorInvestment $sezSectorInvestment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SezSectorInvestment  $sezSectorInvestment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        SezSectorInvestment::find($id)->update($request->all());
        return redirect('sez-sector-investment');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SezSectorInvestment  $sezSectorInvestment
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        SezSectorInvestment::destroy($id);
        return redirect('sez-sector-investment');

    }
}
