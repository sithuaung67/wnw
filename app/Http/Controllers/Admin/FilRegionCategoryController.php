<?php

namespace App\Http\Controllers\Admin;

use App\FilRegionCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilRegionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fil_region_category=FilRegionCategory::all();
        return view('admin.fil.region_category.index')->with(compact('fil_region_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fil.region_category.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request['name'];
        $fil_region_category=new FilRegionCategory();
        $fil_region_category->name=$name;
        $fil_region_category->save();
        return redirect('/fil/region/category/index');
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
        $name=$request['name'];
        $region=FilRegionCategory::whereId($id)->firstOrFail();
        $region->name=$name;
        $region->update();
        return redirect('/fil/region/category/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FilRegionCategory::destroy($id);
        return redirect()->back();
    }
}
