<?php

namespace App\Http\Controllers;

use App\SezCountryInvestment;
use App\SezCountryCategory;
use Illuminate\Http\Request;

class SezCountryInvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sez_country_investments=SezCountryInvestment::all();
        $sez_country_categories=SezCountryCategory::pluck('name','id');

        return view('admin.sez.country-investment.index', compact('sez_country_categories','sez_country_investments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sez_country_categories=SezCountryCategory::pluck('name','id');

        return view('admin.sez.country-investment.create', compact('sez_country_categories'));

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
        SezCountryInvestment::create($request->all());

        return redirect('sez-country-investment');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SezCountryInvestment  $sezCountryInvestment
     * @return \Illuminate\Http\Response
     */
    public function show(SezCountryInvestment $sezCountryInvestment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SezCountryInvestment  $sezCountryInvestment
     * @return \Illuminate\Http\Response
     */
    public function edit(SezCountryInvestment $sezCountryInvestment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SezCountryInvestment  $sezCountryInvestment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        SezCountryInvestment::find($id)->update($request->all());

        return redirect('sez-country-investment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SezCountryInvestment  $sezCountryInvestment
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        SezCountryInvestment::destroy($id);

        return redirect('sez-country-investment');
    }
}
