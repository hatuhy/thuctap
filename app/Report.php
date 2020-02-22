<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $table = 'report';
    public function Motelroom(){
    	return $this->belongsTo('App\Motelroom', 'motelroom_id','id');
    }
}
