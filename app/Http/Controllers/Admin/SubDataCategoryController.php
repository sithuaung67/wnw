<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\SubDataCategory;
use Illuminate\Http\Request;
use App\MainCategory;
use App\SubCategory;

class SubDataCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sub_data_categories=SubDataCategory::all();
        $main_categories=MainCategory::pluck('name','id');
        $sub_categories=SubCategory::pluck('name','id');
        return view('admin.sub-data-category.index',compact('sub_categories','main_categories','sub_data_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $mian_categories=MainCategory::pluck('name','id');
        return view('admin.sub-data-category.create',compact('mian_categories'));

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
        SubDataCategory::create($request->all());

        return redirect()->route('sub-data-categories');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubDataCategory  $subDataCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubDataCategory $subDataCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubDataCategory  $subDataCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubDataCategory $subDataCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubDataCategory  $subDataCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        SubDataCategory::find($id)->update($request->all());

        return redirect()->route('sub-data-categories');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubDataCategory  $subDataCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        SubDataCategory::destroy($id);

        return redirect()->route('sub-data-categories');
    }

    public function getSubCategory($subDataCategory)
    {
        $sub_data_category=SubCategory::where('main_category_id',$subDataCategory)->pluck('name','id');

        return response()->json($sub_data_category);
    }
    public function getSubDataCategory($subDataCategory)
    {
        $sub_data_category=SubDataCategory::where('sub_category_id',$subDataCategory)->pluck('name','id');

        return response()->json($sub_data_category);
    }
}
