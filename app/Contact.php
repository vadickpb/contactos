<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //indicar que tabla modificar en la bd
    protected $table = 'contacts';

    //one to many
    public function favorite(){
        return $this->hasMany('App\Favorite');

    }

    //many to one
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
