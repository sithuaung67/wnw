<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MainCategory;
use App\SubCategory;
use App\SubDataCategory;
use App\Investment;
use Charts;
use DB;


class ChartController extends Controller
{
    //

    public function index()
    {
    	$sub_data_categories=SubDataCategory::pluck('name','id');
        $mian_categories=MainCategory::pluck('name','id');
        // return view('admin.chart.chart',compact('sub_data_categories','mian_categories'));
        $viewer = SubDataCategory::select(DB::raw("sub_category_id as count"))
        ->orderBy("name")
        ->get()->toArray();
        $viewer = array_column($viewer, 'count');
    
        return view('admin.chart.chart')
    		->with('sub_data_categories',$sub_data_categories)
    		->with('mian_categories',$mian_categories)
            ->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK));
            
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
