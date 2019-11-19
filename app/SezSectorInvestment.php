<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SezSectorInvestment extends Model
{
    //
    protected $guarded=[];

    public function SezSectorCategory()
    {
    	return $this->belongsTo('App\SezSectorCategory');
    }
}
