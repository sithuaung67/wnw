<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\SezCountryCategory;
use Illuminate\Http\Request;
use Validator,Redirect,Response;

class SezCountryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sez_country_categories=SezCountryCategory::all();
        return view('admin.sez.country-category.index', compact('sez_country_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sez.country-category.create');
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
        SezCountryCategory::create($request->all());

        return Redirect::to("sez-country-categories")->withSuccess('Great! Form successfully submit with validation.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SezCountryCategory  $sezCountryCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SezCountryCategory $sezCountryCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SezCountryCategory  $sezCountryCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SezCountryCategory $sezCountryCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SezCountryCategory  $sezCountryCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        SezCountryCategory::find($id)->update($request->all());

        return redirect('sez-country-categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SezCountryCategory  $sezCountryCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        SezCountryCategory::destroy($id);

        return redirect('sez-country-categories');
    }
}
