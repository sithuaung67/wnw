<?php

namespace App\Http\Controllers\Admin;

use App\McilSectorCategory;
use App\McilSectorInvestment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class McilSectorInvestmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors=McilSectorCategory::all();
        $sector_investment=McilSectorInvestment::all();
        return view('admin.mcil.sector_investment.index')->with(compact('sector_investment','sectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sector=McilSectorCategory::all();
        return view('admin.mcil.sector_investment.create',compact('sector'));
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
            'sector'=>'required',
            'quantity'=>'required',
            'amount'=>'required',
        ]);
        $sector=$request['sector'];
        $quantity=$request['quantity'];
        $amount=$request['amount'];
        $sector_investment=new McilSectorInvestment();
        $sector_investment->mcil_sector_category_id=$sector;
        $sector_investment->quantity=$quantity;
        $sector_investment->amount=$amount;
        $sector_investment->save();
        return redirect('/mcil/sector/investment/index');
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
        $sector_investment=McilSectorInvestment::whereId($id)->firstOrFail();
        $sector_investment->mcil_sector_category_id=$sector;
        $sector_investment->quantity=$quantity;
        $sector_investment->amount=$amount;
        $sector_investment->update();
        return redirect('/mcil/sector/investment/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        McilSectorInvestment::destroy($id);
        return redirect()->back();
    }
}
