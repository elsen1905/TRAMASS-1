<?php

namespace App;

use App\Http\Controllers\Auth;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
   public function orders(){
      return $this->belongsTo(Order::class);
   }
   public function products(){
      return $this->belongsTo(Product::class);
   }
   public function user(){
      return $this->products()->users();
   }
}
