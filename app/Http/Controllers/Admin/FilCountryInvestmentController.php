<?php

namespace App\Http\Controllers\Admin;

use App\FilCountryCategory;
use App\FilCountryInvestment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class FilCountryInvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries=FilCountryCategory::all();
        $fil_country_investment=FilCountryInvestment::all();
        return view('admin.fil.country_investment.index')->with(compact('fil_country_investment','countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country=FilCountryCategory::all();
        return view('admin.fil.country_investment.create',compact('country'));
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
            'country'=>'required',
            'quantity'=>'required',
            'amount'=>'required',
            ]);
        $country=$request['country'];
        $quantity=$request['quantity'];
        $amount=$request['amount'];
        $fil_country_investment=new FilCountryInvestment();
        $fil_country_investment->fil_country_category_id=$country;
        $fil_country_investment->quantity=$quantity;
        $fil_country_investment->amount=$amount;
        $fil_country_investment->save();
        return redirect('/fil/country/investment/index');
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
        $country=$request['country'];
        $quantity=$request['quantity'];
        $amount=$request['amount'];
        $fil_country_investment=FilCountryInvestment::whereId($id)->firstOrFail();
        $fil_country_investment->fil_country_category_id=$country;
        $fil_country_investment->quantity=$quantity;
        $fil_country_investment->amount=$amount;
        $fil_country_investment->update();
        return redirect('/fil/country/investment/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FilCountryInvestment::destroy($id);
        return redirect()->back();
    }
}
