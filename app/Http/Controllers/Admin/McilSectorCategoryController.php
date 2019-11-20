<?php

namespace App\Http\Controllers\Admin;

use App\McilSectorCategory;
use App\McilSectorInvestment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class McilSectorCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sector_category=McilSectorCategory::all();
        return view('admin.mcil.sector_category.index')->with(compact('sector_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mcil.sector_category.create');
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
        $sector_category=new McilSectorCategory();
        $sector_category->name=$name;
        $sector_category->save();
        return redirect('/mcil/sector/category/index');
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
        $sector=McilSectorCategory::whereId($id)->firstOrFail();
        $sector->name=$name;
        $sector->update();
        return redirect('/mcil/sector/category/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        McilSectorCategory::destroy($id);
        return redirect()->back();
    }
}
