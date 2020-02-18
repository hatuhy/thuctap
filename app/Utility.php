<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    //
    protected $table = 'utility';
    public function List_Uti(){
        return $this->hasMany('App\List_Uti','utility_id','id');
    }
    
}
