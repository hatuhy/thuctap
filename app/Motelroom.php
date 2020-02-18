<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motelroom extends Model
{
    //
    protected $table = 'motelroom';
    public function Image(){
    	return $this->hasMany('App\Image', 'motelroom_id','id');
    }
    public function List_Uti(){
        return $this->hasMany('App\List_Uti','motelroom_id','id');
    }
    public function Form(){
    	return $this->belongsTo('App\Form', 'form_id','id');
    }
    public function Type(){
        return $this->belongsTo('App\Type','type_id','id');
    }
    public function User(){
        return $this->belongsTo('App\User','user_id','id');
    }
}

