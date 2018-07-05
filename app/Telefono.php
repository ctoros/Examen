<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
        protected $with = ['particular'];
	protected $hidden = ['particular_id'];
        
        public function telefono(){
        return $this->hasOne('App\Particular', 'id','particular_id');
    }
}
