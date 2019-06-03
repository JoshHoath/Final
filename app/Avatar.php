<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    public function user() {
        $this->belongsTo('App\User')
    }
    public function profile(){
        $this->belongsTo('App\Profile');
    }
}
