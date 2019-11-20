<?php

namespace App\Http\Controllers\Admin;

use App\McilRegionCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class McilRegionCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region_category=McilRegionCategory::all();
        return view('admin.mcil.region_category.index')->with(compact('region_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mcil.region_category.create');
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
            'name'=>'required',
        ]);
        $name=$request['name'];
        $region_category=new McilRegionCategory();
        $region_category->name=$name;
        $region_category->save();
        return redirect('/mcil/region/category/index');
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
        $region=McilRegionCategory::whereId($id)->firstOrFail();
        $region->name=$name;
        $region->update();
        return redirect('/mcil/region/category/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        McilRegionCategory::destroy($id);
        return redirect()->back();
    }
}
