<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	//Tạo mới eloquent
    public function allFirstFive() {
    	return self::where('id', '<', 10)->get();
    } 
    
	public function comments() {
  		return $this->hasMany('App\Comment');
   }
}
