<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'discription', 'count', 'price', 'image', 'title','user_id','product_category_id'
    ];

   public function users(){
     return $this->belongsTo(User::class);
   }


   public function baskets(){
     return $this->hasMany(Basket::class);
   }

   public function product_category()
   {
      return $this->belongsTo(Product_Category::class);
   }

}
