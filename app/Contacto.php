<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $with = ['empresa'];
	protected $hidden = ['empresa_id'];

    public function contacto(){
        return $this->hasOne('App\Empresa', 'id','empresa_id');
    }
}
