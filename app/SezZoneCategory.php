<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SezZoneCategory extends Model
{
        protected $guarded = [];

        public function SezZoneInvestment()
        {
        	return $this->hasMany('App\SezZoneInvestment');
        }

}
