<?php

namespace App\Http\Controllers\Admin;

use App\FilSectorCategory;
use App\FilSectorInvestment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilSectorInvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors=FilSectorCategory::all();
        $fil_sector_investment=FilSectorInvestment::all();
        return view('admin.fil.sector_investment.index')->with(compact('fil_sector_investment','sectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sector=FilSectorCategory::all();
        return view('admin.fil.sector_investment.create',compact('sector'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sector=$request['sector'];
        $quantity=$request['quantity'];
        $amount=$request['amount'];
        $fil_sector_investment=new FilSectorInvestment();
        $fil_sector_investment->fil_sector_category_id=$sector;
        $fil_sector_investment->quantity=$quantity;
        $fil_sector_investment->amount=$amount;
        $fil_sector_investment->save();
        return redirect('/fil/sector/investment/index');
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
        $sector=$request['sector'];
        $quantity=$request['quantity'];
        $amount=$request['amount'];
        $fil_sector_investment=FilSectorInvestment::whereId($id)->firstOrFail();
        $fil_sector_investment->fil_sector_category_id=$sector;
        $fil_sector_investment->quantity=$quantity;
        $fil_sector_investment->amount=$amount;
        $fil_sector_investment->update();
        return redirect('/fil/sector/investment/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FilSectorInvestment::destroy($id);
        return redirect()->back();
    }
}
