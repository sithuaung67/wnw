<?php

namespace App\Http\Controllers\Admin;

use App\FilCountryCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilCountryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fil_country_category=FilCountryCategory::all();
        return view('admin.fil.country_category.index')->with(compact('fil_country_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fil.country_category.create');

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
        'name' => 'required',
        
        ]);
        $name=$request['name'];
        $fil_country_category=new FilCountryCategory();
        $fil_country_category->name=$name;
        $fil_country_category->save();
        return redirect('/fil/country/category/index');
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
        $region=FilCountryCategory::whereId($id)->firstOrFail();
        $region->name=$name;
        $region->update();
        return redirect('/fil/country/category/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FilCountryCategory::destroy($id);
        return redirect()->back();
    }
}
