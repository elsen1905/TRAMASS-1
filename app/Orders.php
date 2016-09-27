<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //

   public function users(){
  	
        return $this->belongsTo(User::class);
   }


   public function baskets(){

   	return $this->hasMany(Basket::class);
   }
}
