<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubDataCategory extends Model
{
    //
    protected $guarded=[];
    protected $with = ['mainCategory', 'subCategory'];
    

    public function mainCategory()
    {
    	return $this->belongsTo('App\MainCategory');
    }
     public function subCategory()
    {
    	return $this->belongsTo('App\SubCategory');
    }
}
