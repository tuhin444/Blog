<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	 
    protected $fillable = [
        'name', 'slug',
    ];



    public function user(){
    	return $this->hasMany('App\User');
    }
}
