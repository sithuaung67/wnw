<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SezSectorCategory extends Model
{
    //
        protected $guarded = [];

        public function SezSectorInvestment()
        {
        	return $this->hasMany('App\SezSectorInvestment');
        }
    
}
