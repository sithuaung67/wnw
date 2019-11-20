<?php

namespace App\Http\Controllers\Admin;

use App\FilSectorCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilSectorCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fil_sector_category=FilSectorCategory::all();
        return view('admin.fil.sector_category.index')->with(compact('fil_sector_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fil.sector_category.create');
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
        $fil_sector_category=new FilSectorCategory();
        $fil_sector_category->name=$name;
        $fil_sector_category->save();
        return redirect('/fil/sector/category/index');
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
        $sector=FilSectorCategory::whereId($id)->firstOrFail();
        $sector->name=$name;
        $sector->update();
        return redirect('/fil/sector/category/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FilSectorCategory::destroy($id);
        return redirect()->back();
    }
}
