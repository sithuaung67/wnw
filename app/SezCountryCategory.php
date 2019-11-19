<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SezCountryCategory extends Model
{
    //
    protected $guarded=[];

    public function SezCountryInvestment()
    {
    	return $this->hasMany('App\SezCountryInvestment');
    }
}
