<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SezSectorCategory;
use Illuminate\Http\Request;

class SezSectorCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sez_sector_categories=SezSectorCategory::all();
        return view('admin.sez.sector-category.index', compact('sez_sector_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sez.sector-category.create');
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
        SezSectorCategory::create($request->all());
        return redirect('sez-sector-categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SezSectorCategory  $sezSectorCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SezSectorCategory $sezSectorCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SezSectorCategory  $sezSectorCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SezSectorCategory $sezSectorCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SezSectorCategory  $sezSectorCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        SezSectorCategory::find($id)->update($request->all());

        return redirect('sez-sector-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SezSectorCategory  $sezSectorCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        SezSectorCategory::destroy($id);

        return redirect('sez-sector-categories');
    }
}
