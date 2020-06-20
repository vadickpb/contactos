<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorite extends Model
{
    //indicar la tabla en la bd
    protected $table = 'favorites';

    //one to many
    public function contact(){
        return $this->belongsTo('App\Contact', 'contact_id');
    }
}
