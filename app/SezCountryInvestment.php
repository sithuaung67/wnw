<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SezCountryInvestment extends Model
{
    //
    protected $guarded=[];

    public function SezCountryCategory()
    {
    	return $this->belongsTo('App\SezCountryCategory');
    }
}
