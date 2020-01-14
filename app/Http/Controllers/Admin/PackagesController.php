<?php

namespace App\Http\Controllers\Admin;

use App\CreatePackage;
use App\MyPackage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class PackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $package=CreatePackage::all();
        return view('admin.Packages.index',compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPage(){
        return view('admin.Packages.create');
    }
    public function create(Request $request)
    {
        $img_name=$request['package_name'].'.'.$request->file('image')->getClientOriginalExtension();
        $img_file=$request->file('image');

        $new_package=new CreatePackage();
        $new_package->package_name=$request['package_name'];
        $new_package->region=$request['region'];
        $new_package->country=$request['country'];
        $new_package->trip_date=$request['date'];
        $new_package->package_price=$request['price'];
        $new_package->package_img=$img_name;
        $new_package->save();
        Storage::disk('image')->put($img_name, file::get($img_file));
        return redirect()->back();
    }

    public function getPostImage($img_name){
        $file=Storage::disk('image')->get($img_name);
        return response($file, 200);
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
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $MyPackage=MyPackage::all();
        return view('admin.Packages.show',compact('MyPackage'));
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
