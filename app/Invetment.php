<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invetment extends Model
{
    //
    protected $guarded=[];

    public function mainCategory()
    {
    	return $this->belongsTo('App\MainCategory');
    }
    public function subCategory()
    {
    	return $this->belongsTo('App\SubCategory');
    }
    public function SubDataCategory()
    {
    	return $this->belongsTo('App\SubDataCategory');
    }
}
