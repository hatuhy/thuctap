<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    //
    protected $table = 'district';
    public function Motelroom(){
    	return $this->hasMany('App\Motelroom', 'district_id','id');
    }
}
