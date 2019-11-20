<?php

namespace App\Http\Controllers;

use App\SezZoneCategory;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class SezZoneCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $zonecategories=SezZoneCategory::all();
        return view('admin.sez.zone-category.index',compact('zonecategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sez.zone-category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request,[
            'name'=>'required',
        ]);
        SezZoneCategory::create([
            'name'=>$request->name,
        ]);
        return redirect('sez-zone-categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SezZoneCategory  $sezZoneCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SezZoneCategory $sezZoneCategory)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SezZoneCategory  $sezZoneCategory
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
       
        $zone=SezZoneCategory::find($id);

        return view('admin.sez.zone-category.edit', compact('zone'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SezZoneCategory  $sezZoneCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        SezZoneCategory::find($id)->update($request->all());
        return redirect('sez-zone-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SezZoneCategory  $sezZoneCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SezZoneCategory::destroy($id);
        return redirect('sez-zone-categories');
    }
}
