<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname' , 'address' ,'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function cities(){

        return $this->belongsTo(City::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function order(){

        return $this->hasMany(Product::class);
    }


}
