<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Invetment;
use App\MainCategory;
use App\SubCategory;
use App\SubDataCategory;
use Illuminate\Http\Request;

class InvetmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $main_categories=MainCategory::pluck('name','id');
        $sub_categories=SubCategory::pluck('name','id');
        $sub_data_categories=SubDataCategory::pluck('name','id');
        $investments=Invetment::all();
        return view('admin.investment.index',compact('sub_data_categories','main_categories','sub_categories','investments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sub_data_categories=SubDataCategory::pluck('name','id');
        $mian_categories=MainCategory::pluck('name','id');
        return view('admin.investment.create',compact('mian_categories'));

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
        Invetment::create($request->all());

        return redirect('investments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Invetment  $invetment
     * @return \Illuminate\Http\Response
     */
    public function show(Invetment $invetment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invetment  $invetment
     * @return \Illuminate\Http\Response
     */
    public function edit(Invetment $invetment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invetment  $invetment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        Invetment::find($id)->update($request->all());

        return redirect('investments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invetment  $invetment
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Invetment::destroy($id);
        return redirect('investments');
    }


}
