<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SezZoneInvestment extends Model
{
    //
    protected $guarded=[];

    public function SezZoneCategory()
    {
    	return $this->belongsTo('App\SezZoneCategory');
    }
}
